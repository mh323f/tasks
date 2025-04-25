<?php
include_once  "../config/db.php"; 
include_once  "../models/Tasks.php"; 

$obj =new Tasks();
 
if(isset($_REQUEST)){

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
		 switch ($_POST['action']) {

			 case 'update_task':
			   
             $formData = [];

			     foreach ($_REQUEST['formData'] as $key => $value) {
				    foreach ($value as $key2 => $value2){
				      $formData[$key] = $value2;
				     }
			       }   

				   return $obj->update_task($formData[0], $formData[1]);
				break;

			  case 'create_task':
			   
             $formData = [];

			     foreach ($_REQUEST['formData'] as $key => $value) {
				    foreach ($value as $key2 => $value2){
				      $formData[$key] = $value2;
				     }
			       }   

				   return $obj->create_task($formData[0]);
				break;

			default:
		        break;
	    }		
	    
	}

	if ($_SERVER['REQUEST_METHOD'] === 'GET') {

	   switch ($_GET['action']) {

			case 'getTasks':
				   return $obj->get_tasks();
				break;

			case 'getTaskId':
				   return $obj->getTaskId((int) $_GET['id']);
				break;

			case 'deleteTaskId':
				   return $obj->delete_task( (int) $_GET['id']);
				break;
			
			default:
		        break;
	    }
	}
     
}
    

   
?>
