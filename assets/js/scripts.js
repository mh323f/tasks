function getTasks() 
{
	$.ajax({
        type: "GET",
        async: false,
        url: '../controllers/TasksController.php',
        data: {action:'getTasks'},  
        success: function (response) { 
            
        	response = JSON.parse(response.replace(/^\s+|\s+$/g, ""));

            var html = "";
           
            if(response.length) {
            	 
	            $.each(response, function(key,value) {
	            	
                    html += "<tr>";
					html += "<th>" + value.id + "</th>";
					html += "<td>" + value.task_name + "</td>";
					html += "<td>" + value.created_at + "</td>";
					html += "<td>";
					html += "<button class='btn btn-success btn-sm' data-bs-toggle='modal' data-bs-target='#edit-task-modal' data-id='"+value.id+"' style='padding:1px'><i class='bi bi-pencil-square'></i> Editar</button>";
					html += "<button class='btn btn-danger btn-sm btn-delete-task' data-id='"+value.id+"' style='padding:1px'> <i class='bi bi-trash'></i> Eliminar</button>";
					html += "</td>";
					html += "</tr>";
	            });
	            
            } else {
            	html += '<div class="alert alert-warning">';
				html += 'No hay registros disponibles!';
				html += '</div>';
            }
            
			$("#tasks-list").html(html);
        }
    });
}


	$("#btnCreateSubmit").on("click", function() {

		 var ask_name = $.trim($("#task_name").val());

		  if ( ask_name == "") {

			 Swal.fire({
			  icon: "warning",
			  title: "Oops...",
			  text: "Todos los campos son obligatorios!"
			});

            return false;

        }else{ 

		var $this 		    = $(this);
        var $caption        = $this.html();
        var form 			= "#form";
        var formData        = $(form).serializeArray();
         
    	$.ajax({
	        type: "POST",
	        async: false,
	        url: '../controllers/TasksController.php',
	        data: {action:'create_task',formData},
	        beforeSend: function () {
	            $this.attr('disabled', true).html("Procesando...");
	        },
	        success: function (response) {
	            $this.attr('disabled', false).html($caption);
	         
	              destroyDataTable();
	              getTasks();
	              initializeDataTable();

				Swal.fire({
				  position: "top-center",
				  icon: "success",
				  title: response,
				  showConfirmButton: false,
				  timer: 1200
				});
 
	            resetForm(form);
	            $('#closedmodalcreate').click();
	        },
	        error: function (XMLHttpRequest, textStatus, errorThrown) {
	        	 
	        }
	    });
    }

	});


	function resetForm(selector) 
	{
		$(selector)[0].reset();
	}


	$("#btnUpdateSubmit").on("click", function() {
        
         var task_name = $.trim($("#task_name_update").val());

		  if ( task_name == "") {

			 Swal.fire({
			  icon: "warning",
			  title: "Oops...",
			  text: "Todos los campos son obligatorios!"
			});

            return false;

        }else{ 

		var $this 		    = $(this);
        var $caption        = $this.html();
        var form 			= "#edit-form"; 
        var formData        = $(form).serializeArray();
       
    	$.ajax({
	        type: "POST",
	        async: false,
	        url: '../controllers/TasksController.php',
	        data: {action:'update_task',formData},
	        beforeSend: function () {
	            $this.attr('disabled', true).html("Procesando...");
	        },
	        success: function (response) {
	            $this.attr('disabled', false).html($caption);

	             destroyDataTable();
	             getTasks();
	             initializeDataTable();

				Swal.fire({
				  position: "top-center",
				  icon: "success",
				  title: response,
				  showConfirmButton: false,
				  timer: 1200
				});

	           resetForm(form);
	           $('#closedmodalupdate').click();
	        },
	        error: function (XMLHttpRequest, textStatus, errorThrown) {
	        	 
	        }
	    });
      }

	});


 
	$(document).delegate("[data-bs-target='#edit-task-modal']", "click", function() {

		var id = $(this).attr('data-id');

		$.ajax({
	        type: "GET",
	        async: false,
	        url: '../controllers/TasksController.php', 
	        data: {action:'getTaskId',id:id},
	        beforeSend: function () { 
	            
	        },
	        success: function (response) {
	             
	            response = JSON.parse(response.replace(/^\s+|\s+$/g, ""));
	            $("#edit-form [name=id]").val(response.id);
	            $("#edit-form [name=task_name_update]").val(response.task_name);  
	        }
	    });
	});

	
$(document).delegate(".btn-delete-task", "click", function() {
		
		Swal.fire({
			icon: 'warning',
		  	title: '¿Está seguro de eliminar esta tarea?',
		  	showDenyButton: false,
		  	showCancelButton: true,
		  	confirmButtonText: 'Yes'
		}).then((result) => {
		 
		  if (result.isConfirmed) {

		  	var idtask = $(this).attr('data-id');

			$.ajax({
		        type: "GET",
		        async: false,
		        url: '../controllers/TasksController.php',
		        data: {action:'deleteTaskId',id:idtask},
		        beforeSend: function () {},
		        success: function (response) {

		          destroyDataTable();
	              getTasks();
	              initializeDataTable();

		          Swal.fire({
				  position: "top-center",
				  icon: "success",
				  title: response,
				  showConfirmButton: false,
				  timer: 1200
				  });
		        }
		    });
		    
		  } else if (result.isDenied) {
		    Swal.fire('Los cambios no se guardaron.', '', 'info')
		  }
		});

		
	});

	$(document).ready(function(){
		
		  getTasks();
		  initializeDataTable();
	});

    function destroyDataTable(){
     
     if ($.fn.DataTable.isDataTable('#table_Tasks')) {
         $('#table_Tasks').DataTable().destroy();
      }

    }

	function initializeDataTable(){

		$("#table_Tasks").DataTable({
             pageLength:5,
             lengthMenu: [5,10, 25, 50, { label: 'All', value: -1 }],
             language: {
                url: "https://cdn.datatables.net/plug-ins/1.10.25/i18n/English.json",
            },
        });
	}