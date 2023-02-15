<div class="modal fade" id="addsolicitud">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Solicitud de vacaciones</b></h4>
          	</div>
  	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="../add_solicitud.php" enctype="multipart/form-data">				

				<div class="form-group">
                  	<label for="empleado" class="col-sm-3 control-label">EMPLEADO  </label>	
                  	<div class="col-sm-9">
                      <input type="text" class="form-control" id="empleado" name="empleado" value="<?php echo $user['firstname'] ?> <?=  $user ['lastname']; ?>" readonly>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="descripcion" class="col-sm-3 control-label">DIAS DISPONIBLES</label>
                  	<div class="col-sm-9">
                      <?php    
                      $id = $_SESSION['employees'];
                  $sql= "SELECT * FROM vacaciones where id =$id";
                    $query = $conn->query($sql);
                    while($fila = $query->fetch_assoc()){
                      ?>
                    <?php            
                          $hireDate = $fila['fecha_contratacion'];
                           
                          $currentDate = date("Y-m-d");

                          $start = strtotime($hireDate);

                          $end = strtotime($currentDate);

                          $daysWorked = ($end - $start)/60/60/24;

                          $vacationDaysPerYear = 15;

                          $vacationDays = $vacationDaysPerYear * $daysWorked;

                          $vacationDaysPerDay = $vacationDays / 365;

                        }
?>
                        <input type="text" class="form-control" id="fecha_inicio" name="fecha_inicio" value="<?php  echo round($vacationDaysPerDay ,  PHP_ROUND_HALF_DOWN , 1);  ?>" readonly>
                    	</div>
                </div>
                <div class="form-group">
                  	<label for="fecha_inicio" class="col-sm-3 control-label">FECHA INICIO</label>	
                  	<div class="col-sm-9">
                <input type="datetime" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
                  	</div>
                </div>
                      <div class="form-group">
                  	<label for="fecha_fin" class="col-sm-3 control-label">FECHA FIN</label>
                  	<div class="col-sm-9">
                        <?php 
/// Definir la cantidad de días disponibles
$dias_disponibles = 15;

// Obtener la fecha actual
$hoy = date('Y-m-d');

// Calcular la fecha máxima permitida para seleccionar
$fecha_maxima = date('Y-m-d', strtotime("+$dias_disponibles days"));

// Configurar el calendario con los límites mínimo y máximo
echo '<input type="date" name="fecha" min="' . $hoy . '" max="' . $fecha_maxima . '">';

                        
                        ?>
                  	</div>
                </div>
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="Createsolicitud"><i class="fa fa-save"></i> Guardar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>