<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title nameTitle"></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Listado de Logs para:<p id="taskDescription">One fine body&hellip;</p>
          <a href="#!" class="btn btn-primary font-weight-bolder newLog"><span class="svg-icon svg-icon-md"></span>Nuevo Log</a><br><br>
          <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col"> Cliente</th>
                    <th scope="col"> Descripcion</th>
                    <th scope="col"> Fecha </th>
                </tr>
            </thead>
            <tbody id="listado_logs">

            </tbody>
        </table>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
