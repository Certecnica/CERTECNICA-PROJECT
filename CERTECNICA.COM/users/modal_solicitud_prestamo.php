<div class="modal fade" id="addPrestamo">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>SOLICITUD DE PRESTAMO </b></h4>
          	</div>
  	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="add_solicitud_prestamo.php" enctype="multipart/form-data">			
				<div class="form-group">
                  	<label for="empleado" class="col-sm-3 control-label">EMPLEADO  </label>	
                  	<div class="col-sm-9">
                      <input type="text" class="form-control" id="empleado" name="empleado" value="<?php echo $user['firstname'] ?> <?=  $user ['lastname']; ?>" readonly>
                  	</div>
                </div>

                <div class="form-group">
                  	<label for="monto_solicitado" class="col-sm-3 control-label">MONTO SOLICITADO</label>
                  	<div class="col-sm-9">
                    <input type="number" class="form-control" id="monto_solicitado" name="monto_solicitado">
                    	</div>
                </div>
                
                <div class="form-group">
                  	<label for="cuotas" class="col-sm-3 control-label">CUOTAS</label>	
                  	<div class="col-sm-9">
                <input type="number" class="form-control" id="cuotas" name="cuotas" required>
                   </div>
                </div>

                <div class="form-group">
                  	<label for="valor_cuota" class="col-sm-3 control-label">VALOR CUOTA MENSUAL</label>	
                  	<div class="col-sm-9">
                <input type="number" class="form-control" id="valor_cuota" name="valor_cuota" required>
                   </div>
                </div>

                <div class="form-group">
                  	<label for="fecha_descuento" class="col-sm-3 control-label">FECHA PRIMER DESCUENTO</label>	
                  	<div class="col-sm-9">
                <input type="date" class="form-control" id="fecha_descuento" name="fecha_descuento" required>
                   </div>
                </div>

                <div class="form-group">
                  	<label for="destino_prestamo" class="col-sm-3 control-label">DESTINO PRESTAMO</label>	
                  	<div class="col-sm-9">
                <input type="text" class="form-control" id="destino_prestamo" name="destino_prestamo" required>
                   </div>
                </div>

                
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="CreatePrestamo"><i class="fa fa-save"></i> Guardar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>