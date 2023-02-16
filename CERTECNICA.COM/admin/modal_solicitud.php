<div class="modal fade" id="addSolicitud">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>AGREGAR SOLICITUD DE PERMISO</b></h4>
          	</div>
  	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="add_empleado_solicitud.php" enctype="multipart/form-data">
				
				<div class="form-group">
                    <label for="empleado_solicitud" class="col-sm-3 control-label">EMPLEADO </label>
                    <div class="col-sm-9">
                      <select class="form-control" name="empleado_solicitud" id="empleado_solicitud" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM employees";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['firstname'] .$prow['lastname']."'>".$prow['firstname']."".$prow['lastname']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>	
    <div class="form-group">
        <label for="motivo_solicitud" class="col-sm-3 control-label"> MOTIVO </label>
        <div class="col-sm-9">
            <select class="form-control" name="motivo_solicitud" id="motivo_solicitud">
            <option value="" selected>- Seleccionar - </option>
             <?php 
             $consulta = "SELECT * FROM motivo";
             $resultado = $conn->query($consulta);
             while($row = $resultado ->fetch_assoc()){
               echo "
               <option value='".$row['desc']. "'> " .$row['desc']. " </option>
               ";
             }
             ?>
            </select>
        </div>
    </div>           

<div class="form-group">
                  	<label for="fecha_inicio" class="col-sm-3 control-label">FECHA INICIO</label>	
                  	<div class="col-sm-9">
                    	<input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
                  	</div>
                </div>
                      <div class="form-group">
                  	<label for="fecha_fin" class="col-sm-3 control-label">FECHA FIN</label>

                  	<div class="col-sm-9">
                    	<input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required>
                  	</div>
                </div>

                <div class="form-group">
                <label for="descripcion" class="control-label col-sm-3">DESCRIPCIÓN</label>
                <div class="col-sm-9">
                     <input type="text" class="form-control" id="descripcion" name="descripcion">
                     </div>
                </div>
                <div class="documente_file">
                <label for="documento_solicitud" class="col-sm-3 control-label" >  DOCUMENTO</label>
                 <div class="col-sm-9">
                 <input type="file" class="form-control" id="documento_solicitud" name="documento_solicitud" >
                 </div>
                </div>
<br><br><br>
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="CreateDotacion"><i class="fa fa-save"></i> Guardar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>
