
<!DOCTYPE html>
<html lang="en">
 
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TASKS CRUD - TERRA MX</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
         
         <!-----------------------Iconos -------------------------->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

         <!-------------------------Librería DataTables Compatible para Bootstrap 5 -------------------------->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.css"/>
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>

 
<!-- Sweetalert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-------------------------
        Referencias CDN:
        https://getbootstrap.com
        https://icons.getbootstrap.com
        https://datatables.net/examples/styling/bootstrap5.html
         -------------------------->
    </head>
    <body>

<?php include ('add.php'); ?>
<?php include ('edit.php'); ?>

        <div class="container">
    
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                 <h2 class="text-center"><i class="bi bi-list-task"> Tareas</i> </h2>
                 <hr> 
                  <div>
                    <span class="float-end">
                    <button class='btn btn-dark btn-sm' title="Registrar Nueva Tarea" data-bs-toggle='modal' data-bs-target='#create-task-modal' style='padding:1px; background:black'><i class="bi bi-plus-circle"></i> Agregar Tarea</button>
                    </span>
                 </div>
            </div>

            <div class="col-md-12">
                <div class="table-responsive">
                     <table id="table_Tasks" class="table table-striped" style="width:100%">
                       <thead>
                            <tr>
                                <th >#</th>
                                <th >Tarea</th>
                                <th >Fecha de Registro</th>
                                <th >Acciones</th>
                            </tr>
                        </thead>
                         <tbody id="tasks-list"></tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
      
    <script src="../assets/js/scripts.js"></script>
   
    </body>
</html>
