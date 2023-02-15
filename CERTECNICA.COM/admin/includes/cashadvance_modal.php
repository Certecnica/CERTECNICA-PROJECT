<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Solicitud de Prestamo</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="cashadvance_add.php">
          		  
				<div class="form-group">
                  	<label for="employee" class="col-sm-3 control-label">ID Empleado</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="employee" name="employee" required>
                  	</div>
                </div>
                
				<div class="form-group">
                  	<label for="monto" class="col-sm-3 control-label">MONTO</label>

                  	<div class="col-sm-9">
                    	<input type="number" class="form-control" id="monto" name="monto" required>
                  	</div>
                </div>
				<div class="form-group">
                  	<label for="cuotas" class="col-sm-3 control-label">N° CUOTAS</label>

                  	<div class="col-sm-9">
                    	<input type="number" class="form-control" id="cuotas" name="cuotas" required>
                  	</div>
                </div>
				<div class="form-group">
                  	<label for="cuota_mensual" class="col-sm-3 control-label">VALOR CUOTA MENSUAL</label>

                  	<div class="col-sm-9">
                    	<input type="number" class="form-control" id="cuota_mensual" name="cuota_mensual" required>
                  	</div>
                </div>
				<div class="form-group">
                  	<label for="fecha_pago" class="col-sm-3 control-label">FECHA PRIMER PAGO</label>

                  	<div class="col-sm-9">
                    	<input type="date" class="form-control" id="fecha_pago" name="fecha_pago" required>
                  	</div>
                </div>
				<div class="form-group">
                  	<label for="destino_prestamo" class="col-sm-3 control-label">DESTINO PRESTAMO</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="destino_prestamo" name="destino_prestamo" required>
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
<!-- Edit -->
<div class="modal fade" id="editar">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="date"></span> - <span class="employee_name"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="cashadvance_edit.php">
            		<input type="hidden" class="caid" name="id">
                <div class="form-group">
                    <label for="edit_amount" class="col-sm-3 control-label">Monto</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_amount" name="amount" required>
                      </div>

					  <div class="form-group">
						<label for="edit_Ncuotas" class="col-sm-3 control-label">N° Cuotas</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="edit_Ncuotas" name="edit_Ncuotas" required>
						</div>
					  </div>
					  <div class="form-group">
						<label for="edit_cuotasMensual" class="col-sm-3 control-label">Cuota Mensual</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="edit_cuotasMensual" name="edit_cuotasMensual" required >
						</div>
					  </div>
                      <div class="form-group">
						<label for="edit_fechapago" class="col-sm-3 control-label">Fecha Primer pago</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="edit_fechapago" name="edit_fechapago">
						</div>
					  </div>
					  <div class="form-group">
						<label for="edit_destino" class="col-sm-3 control-label"> Destino Prestamo </label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="edit_destino" name="edit_destino">
						</div>
					  </div>
			    </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-success btn-flat" name="editar"><i class="fa fa-check-square-o"></i> Actualizar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>
<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="date"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="cashadvance_delete.php">
            		<input type="hidden" class="caid" name="id">
            		<div class="text-center">
	                	<p>Eliminar Adelanto de Efectivo</p>
	                	<h2 class="employee_name bold"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Eliminar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>


     