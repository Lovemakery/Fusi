					<div class="col-lg-6">
                        <div class="card-box">
                            <div class="card-block">
                                <h4 class="card-title">Add User</h4>
								<div class="table-responsive">
									<form method="post">
										<div class="form-group">
											<label>Name</label>
											<input name="name" type="text" autofocus="" id="focusedInput" class="form-control input focused" required>
										</div>
										<div class="form-group">
											<label>Email</label>
											<input name="email" type="email" autofocus="" id="focusedInput" class="form-control input focused" required>
										</div>
										<div class="form-group">
											<label>Password</label>
											<input name="password" type="password" autofocus="" id="focusedInput" class="form-control input focused" required>
										</div>
										<div class="form-group text-center">
											<button name="save" class="btn btn-primary account-btn">Add</button>
										</div>
									</form>
								</div>
                            </div>
                        </div>
                    </div>
					
					<?php
						if (isset($_POST['save'])){
						$name = $_POST['name'];
						$email = $_POST['email'];
						$password = $_POST['password'];


						$query = mysqli_query($conn,"select * from users where email  = '$email ' and  name = '$name' and password = '$password' ")or die(mysqli_error());
						$count = mysqli_num_rows($query);

						if ($count > 0){ ?>
						<script>
						alert('Data Already Exist');
						</script>
						<?php
						}else{
						mysqli_query($conn,"insert into users (email,password,name) values('$email','$password','$name')")or die(mysqli_error());

						?>
						<script>
						window.location = "admin_user.php";
						</script>
						<?php
						}
						}
						?>