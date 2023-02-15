<!-- Add -->

<div class="modal fade" id="addDotacion">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Agregar Tallas Dotación</b></h4>
          	</div>
  	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="add_dotacion.php" enctype="multipart/form-data">				
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
                  	<label for="camisa" class="col-sm-3 control-label">TALLA CAMISA</label>	
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="camisa" name="camisa" required>
                  	</div>
                </div>
                      <div class="form-group">
                  	<label for="calzado" class="col-sm-3 control-label">Calzado</label>
                  	<div class="col-sm-9">
                    	<input type="calzado" class="form-control" id="calzado" name="calzado" required>
                  	</div>
                </div>
 <div class="form-group">
                  	<label for="chaqueta" class="col-sm-3 control-label">Chaqueta</label>
                  	<div class="col-sm-9">
                    	<input type="chaqueta" class="form-control" id="chaqueta" name="chaqueta" required>
                  	</div>
                </div>
				<div class="form-group">
                  	<label for="pantalon" class="col-sm-3 control-label">Pantalon</label>
                  	<div class="col-sm-9">
                    	<input type="pantalon" class="form-control" id="pantalon" name="pantalon" required>
                  	</div>
                </div>
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="CreateDotacion"><i class="fa fa-save"></i> Guardar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>
