<?php include 'includes/conn.php' ?>
<div class="modal fade" id="manage_quiz" tabindex="-1" role="dialog" >
				<div class="modal-dialog modal-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							
				
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<form id='quiz-frm' action="add_quiz.php">
							<div class ="modal-body">
								<div id="msg"></div>
								<div class="form-group">
									<label>Title</label>
									<input type="hidden" name="title" />
									<input type="text" name="title" required="required" class="form-control" />
								</div>
								<div class="form-group">
									<label>Points per question</label>
									<input type="nember" name ="qpoints" required="" class="form-control" />
								</div>
								<?php if($_SESSION['admin'] == 1): ?>
								<div class="form-group">
									<label>Faculty</label>
									<select name="user_id" required="required" class="form-control" />
									<option value="" selected="" disabled="">Select Here</option>
									<?php
										$qry = $conn->query("SELECT * from users where user_type = 1 order by name asc");
										while($row= $qry->fetch_assoc()){
									?>
										<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
									<?php } ?>
									</select>
								</div>
								<?php else: ?>
									<input type="hidden" name="user_id" />
								<?php endif; ?>
							</div>
							<div class="modal-footer">
								<button  class="btn btn-primary" name="save"><span class="glyphicon glyphicon-save"></span> Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>