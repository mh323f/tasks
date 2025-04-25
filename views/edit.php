<!-- Modal Update-->
<div class="modal fade" id="edit-task-modal" tabindex="-1" aria-hidden="true" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color:gray"><i class="bi bi-book"></i> Actualizar Tarea</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id='closedmodalupdate'></button>
      </div>
      <div class="modal-body">
          <form action="" id="edit-form">
                       <input class="form-control" type="hidden" name="id">
                        <div class="form-group"> 
                             <label for="task_name_update" class="form-label">
                                <strong>Descripción Tarea</strong>
                             </label>
                            <input class="form-control" type="text" name="task_name_update" id="task_name_update">
                        </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm"  data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success btn-sm" id="btnUpdateSubmit" >Guardar</button>
      </div>
    </div>
  </div>
</div>