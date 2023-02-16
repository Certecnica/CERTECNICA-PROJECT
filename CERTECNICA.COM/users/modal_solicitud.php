<div class="modal fade" id="addsolicitud">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Agregar Solicitud de permiso</b></h4>
          	</div>
  	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="../add_solicitud.php" enctype="multipart/form-data">				
				<div class="form-group">
                    <label for="motivo" class="col-sm-3 control-label"> MOTIVO: </label>
                    <div class="col-sm-9">
                      <select class="form-control" name="motivo" id="motivo" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM motivo";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['desc'] ."'>".$prow['desc']."</option>
                            "; 
                          }
                        ?>
                      </select>
                    </div>
                </div>
				<div class="form-group">
                  	<label for="empleado" class="col-sm-3 control-label">EMPLEADO : </label>	
                  	<div class="col-sm-9">
                      <input type="text" class="form-control" id="empleado" name="empleado" value="<?php echo $user['firstname'] ?> <?=  $user ['lastname']; ?>" readonly>
                  	</div>
                </div>
<div class="form-group">
                  	<label for="fecha_inicio" class="col-sm-3 control-label">Fecha Inicio</label>	
                  	<div class="col-sm-9">
                      <input type="datetime-local" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
                  	</div>
                </div>
                      <div class="form-group">
                  	<label for="fecha_fin" class="col-sm-3 control-label">Fecha Fin</label>
                  	<div class="col-sm-9">
                    	<input type="datetime-local" class="form-control" id="fecha_fin" name="fecha_fin" required>
                  	</div>
                </div>
 <div class="form-group">
                  	<label for="descripcion" class="col-sm-3 control-label">Descripción</label>
                  	<div class="col-sm-9">
                    	<input type="descripcion" class="form-control" id="descripcion" name="descripcion">
                  	</div>
                </div>
				
				<div class="">
<label for="documento" class="col-sm-3 control-label" >Documento  </label>
<input type="file" class="form-control" id="documento" name="documento">
</div>
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="Createsolicitud"><i class="fa fa-save"></i> Guardar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>