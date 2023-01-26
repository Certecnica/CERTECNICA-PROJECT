<!-- Add -->
<div class="modal fade" id="addSancion">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Agregar Sanción</b></h4>
          	</div>
  	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="add_sanciones.php" enctype="multipart/form-data">
				
				<div class="form-group">
                    <label for="empleado" class="col-sm-3 control-label">EMPLEADO :</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="empleado" id="empleado" required>
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
                  	<label for="falta" class="col-sm-3 control-label">Fecha falta</label>	
                  	<div class="col-sm-9">
                    	<input type="date" class="form-control" id="falta" name="falta" required>
                  	</div>
                </div>

                      <div class="form-group">
                  	<label for="sancion" class="col-sm-3 control-label">Fecha Sancion</label>

                  	<div class="col-sm-9">
                    	<input type="date" class="form-control" id="sancion" name="sancion" required>
                  	</div>
                </div>
 <div class="form-group">
                  	<label for="motivo" class="col-sm-3 control-label">Motivo</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="motivo" name="motivo" required>
                  	</div>
                </div>
      

				<div class="form-group">
                  	<label for="descripcion" class="col-sm-3 control-label">Descripcion</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="descripcion" name="descripcion" required>
                  	</div>
                </div>

                <div class="">
<label for="documento" class="col-sm-3 control-label" >Documento  </label>
<input type="file" class="form-control" id="documento" name="documento" >
</div>
<br>
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="CreateDotacion"><i class="fa fa-save"></i> Guardar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>











