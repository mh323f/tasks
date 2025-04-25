<?php
class Tasks{

    private $db;
  
    public function __construct(){
        $this->db=db::conexion();
        $row=array();
    }

    public function get_Tasks(){
           
        $sql = "SELECT * FROM tasks";

        $results = $this->db->query($sql);

        $row = $results->fetch_all(MYSQLI_ASSOC);

        $results->free_result();

        $this->db->close();

         echo json_encode($row);
    }

    public function getTaskId($idtask){
       
        $sql = "SELECT * FROM tasks WHERE id='".$idtask."'";

        $results = $this->db->query($sql);

        $row = $results->fetch_assoc();

        $results->free_result();

        $this->db->close();

        echo json_encode($row);

    }

    public function delete_task($idtask){

        $sql = "DELETE FROM tasks WHERE id='".$idtask."'";
         
        if ( $this->db->query($sql)) {
          echo "Tarea Eliminada.";
        } else {
          echo "Hubo un problema al intentar eliminar la tarea.";
        }

        $this->db->close();
    }


    public function update_task($id, $task_name){

        $sql = "UPDATE tasks SET task_name='".$task_name."', created_at='" . date("Y-m-d h:i:s") . "' WHERE id='".$id."'";
         
        if ( $this->db->query($sql)) {
          echo "Tarea Actualizada.";
        } else {
          echo "Hubo un problema al intentar actualizar la tarea.";
        }

        $this->db->close();
    }
    

     public function create_task($task_name){

         $sql = "INSERT INTO tasks (task_name, created_at) VALUES ('".$task_name."', '" . date("Y-m-d h:i:s") . "')";
         
        if ( $this->db->query($sql)) {
          echo "Tarea Agregada.";
        } else {
          echo "Hubo un problema al intentar crear la tarea.";
        }

        $this->db->close();
    }

}
?>
