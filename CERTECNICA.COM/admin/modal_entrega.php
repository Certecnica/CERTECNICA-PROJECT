<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Agregar entrega</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="entrega_add.php" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="empleado" class="col-sm-3 control-label">EMPLEADO </label>

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
			   <label for="documento" class="col-sm-3 control-label">FECHA DE ENTREGA </label>	
			   <div class="col-sm-9">
				<input type="date" class="form-control" id="fecha_entrega" name="fecha_entrega" required>
			   </div>
			</div>
			 
			<div class="form-group">
                    <label for="elemento" class="col-sm-3 control-label"> ELEMENTO </label>
                    <div class="col-sm-9">
                      <select class="form-control" name="elemento" id="elemento" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM productos_dotacion";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['producto']. "'>".$prow['producto']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>	
			<div class="form-group">
				<label for="descripcion" class="col-sm-3 control-label">DESCRIPCIÓN</label>
				 <div class="col-sm-9">
					<input type="text" class="form-control" id="descripcion" name="descripcion" >
				 </div>
			</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Guardar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>
