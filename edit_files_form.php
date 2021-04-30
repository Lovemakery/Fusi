					<div class="col-lg-6">
                        <div class="card-box">
                            <div class="card-block">
                                <h4 class="card-title">Edit Teacher</h4>
								<div class="table-responsive">
								<?php
									$query = mysqli_query($conn,"select * from teacher where teacher_id = '$get_id' ")or die(mysqli_error());
									$row = mysqli_fetch_array($query);
									?>
									<form method="post">
										<div class="form-group">
											<label>Department</label>
											<select name="department"  class="form-control select" required>
											<?php
											$query_teacher = mysqli_query($conn,"select * from teacher join  department")or die(mysqli_error());
											$row_teacher = mysqli_fetch_array($query_teacher);
											
											?>
												<option value="<?php echo $row_teacher['department_id']; ?>">
												<?php echo $row_teacher['department_name']; ?>
												</option>
												<?php
												$department = mysqli_query($conn,"select * from department order by department_name");
												while($department_row = mysqli_fetch_array($department)){
												
												?>
												<option value="<?php echo $department_row['department_id']; ?>">
												<?php echo $department_row['department_name']; ?>
												</option>
												<?php } ?>
											</select>
										</div>
										
										<div class="form-group">
											<label>Firstname</label>
											<input class="form-control input focused" value="<?php echo $row['firstname']; ?>" name="firstname" id="focusedInput" type="text"  required>
										</div>
										<div class="form-group">
											<label>Lastname</label>
											<input class="form-control input focused" value="<?php echo $row['lastname']; ?>"  name="lastname" id="focusedInput" type="text"  required>
										</div>
										<div class="form-group text-center">
											<button name="update" class="btn btn-primary account-btn">update</button>
										</div>
									</form>
								</div>
                            </div>
                        </div>
                    </div>
					
				   <?php
                            if (isset($_POST['update'])) {
                       
                                $firstname = $_POST['firstname'];
                                $lastname = $_POST['lastname'];
                                $department_id = $_POST['department'];
								
								
								$query = mysqli_query($conn,"select * from teacher where firstname = '$firstname' and lastname = '$lastname' ")or die(mysqli_error());
								$count = mysqli_num_rows($query);
								
								if ($count > 1){ ?>
								<script>
								alert('Data Already Exist');
								</script>
								<?php
								}else{
								
								mysqli_query($conn,"update teacher set firstname = '$firstname' , lastname = '$lastname' , department_id = '$department_id' where teacher_id = '$get_id' ")or die(mysqli_error());	
								
								?>
								<script>
							 	window.location = "teachers.php"; 
								</script>
								<?php   }} ?>
						 
						 