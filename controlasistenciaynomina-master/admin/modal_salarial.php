<!-- Add -->

<div class="modal fade" id="addSalario">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Agregar Tallas Dotación</b></h4>
          	</div>
  	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="add_salario.php" enctype="multipart/form-data">
				
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
                  	<label for="salario" class="col-sm-3 control-label">SALARIO BASICO : </label>	
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="salario" name="salario" required>
                  	</div>
                </div>

                      <div class="form-group">
                  	<label for="aux" class="col-sm-3 control-label">AUXILIO NO SALARIAL </label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="aux" name="aux" required>
                  	</div>
                </div>

                	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="CreateSalario"><i class="fa fa-save"></i> Guardar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>
