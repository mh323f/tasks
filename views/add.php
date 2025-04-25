 <!-- Modal Create-->
<div class="modal fade" id="create-task-modal" tabindex="-1" aria-hidden="true" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color:gray"><i class="bi bi-book"></i> Agregar Tarea</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id='closedmodalcreate'></button>
      </div>
      <div class="modal-body">
                <form action="" id="form">
                    <div class="form-group">
                        <label for="task_name" class="form-label">
                                <strong>Descripción de la Tarea</strong>
                        </label>
                        <input class="form-control" type="text" name="task_name" id="task_name"  required >
                    </div>
                    <br/>
                    <button type="button" class="btn btn-secondary btn-sm"  data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success btn-sm" id="btnCreateSubmit">Guardar</button>
                </form>
      </div>
    </div>
  </div>
</div>