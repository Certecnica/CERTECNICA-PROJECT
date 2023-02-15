<!-- Add -->

<div class="modal fade" id="addAdmin">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Agregar Administrador</b></h4>
          	</div>
  	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="../admin/add_Admin.php" enctype="multipart/form-data">
          		  <div class="form-group">
                  	<label for="primerNombre" class="col-sm-3 control-label">Nombre</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="PrimerNombre" name="PrimerNombre" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="apellidos" class="col-sm-3 control-label">Apellidos</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="apellidos" name="apellidos" required>
                  	</div>
<br>

<div class="form-group">
                  	<label for="usuario" class="col-sm-3 control-label">Usuario</label>
<br>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="usuario" name="usuario" required>
                  	</div>
                </div>

                      <div class="form-group">
                  	<label for="contraseña" class="col-sm-3 control-label">Contraseña</label>

                  	<div class="col-sm-9">
                    	<input type="contraseña" class="form-control" id="contraseña" name="contraseña" required>
                  	</div>
                </div>
 <br>              
                <div class="form-group">
                    <label for="foto" class="col-sm-3 control-label">Foto</label>

                    <div class="col-sm-9">
                      <input type="file" name="foto" id="foto">
                    </div>

                    
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="CreateAdmin"><i class="fa fa-save"></i> Guardar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Foto-->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="del_employee_name"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                <input type="hidden" class="empid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Foto</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Actualizar</button>
              </form>
            </div>
        </div>
    </div>
</div>    

