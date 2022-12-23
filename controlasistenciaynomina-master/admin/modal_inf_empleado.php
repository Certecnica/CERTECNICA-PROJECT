
<div class="modal fade" id="addEmpleado">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b> Agregar Empleado </b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="add_emp_corporativo.php" enctype="multipart/form-data">
          		  <div class="form-group">
                  
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
                    <label for="nuevo" class="col-sm-3 control-label">CARGO : </label>

                    <div class="col-sm-9">
                      <select class="form-control" id="cargo" name="cargo" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM position";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['description']."'>".$srow['description']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="area" class="col-sm-3 control-label"> AREA </label>

                    <div class="col-sm-9">
                      <select class="form-control" id="area" name="area" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM areas";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['area']."'>".$srow['area']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  	<label for="correo_corporativo" class="col-sm-3 control-label">CORREO CORPORATIVO</label>

                  	<div class="col-sm-9">
                    	<input type="email" class="form-control" id="correo_corporativo" name="correo_corporativo" placeholder="Ingrese el correo corporativo(si no tiene asignado uno ingresar N/A)">
                  	</div> 
                </div>
                <div class="form-group">
                  	<label for="numero" class="col-sm-3 control-label">TELEFONO CORPORATIVO</label>

                  	<div class="col-sm-9">
                    	<input type="number" class="form-control" id="numero" name="numero" placeholder="Ingrese el Telefono  corporativo" >
                  	</div> 
                </div>
                <div class="form-group">
                    <label for="eps" class="col-sm-3 control-label"> EPS </label>

                    <div class="col-sm-9">
                      <select class="form-control" id="eps" name="eps" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM eps";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['eps']."'>".$srow['eps']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="afp" class="col-sm-3 control-label"> AFP </label>

                    <div class="col-sm-9">
                      <select class="form-control" id="afp" name="afp" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM afp";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['NOMBRE']."'>".$srow['NOMBRE']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cesantias" class="col-sm-3 control-label"> CESANTIAS </label>

                    <div class="col-sm-9">
                      <select class="form-control" id="cesantias" name="cesantias" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM cesantias";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['NOMBRE']."'>".$srow['NOMBRE']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="caja_compensacion" class="col-sm-3 control-label">CAJA COMPENSACIÓN</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="caja_compensacion" name="caja_compensacion" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM cesantias";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['NOMBRE']."'>".$srow['NOMBRE']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>           <div class="form-group">
                    <label for="arl" class="col-sm-3 control-label"> ARL </label>

                    <div class="col-sm-9">
                      <select class="form-control" id="arl" name="arl" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM cesantias";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['NOMBRE']."'>".$srow['NOMBRE']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Tcontrato" class="col-sm-3 control-label">TIPO CONTRATO </label>

                    <div class="col-sm-9">
                      <select class="form-control" id="Tcontrato" name="Tcontrato" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM tipo_contrato";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['NOMBRE']."'>".$srow['NOMBRE']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="escolaridad" class="col-sm-3 control-label"> NIVEL ESCOLARIDAD</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="escolaridad" name="escolaridad" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM nivel_escolaridad";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['NOMBRE']."'>".$srow['NOMBRE']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  	<label for="titulo" class="col-sm-3 control-label">TITULO</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese titulo del empleado">
                  	</div> 
                </div>
                <div class="form-group">
                  	<label for="matricula" class="col-sm-3 control-label">MATRICULA PROFESIONAL</label>

                  	<div class="col-sm-9">
                    	<input type="tex" class="form-control" id="matricula" name="matricula" placeholder="Ingrese la matricula profesional">
                  	</div> 
                </div>
          	</div>
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="AddEmpleado"><i class="fa fa-save"></i> Guardar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>