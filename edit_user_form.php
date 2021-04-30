        <div class="col-lg-6">
		 <a href="admin_user.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add user</a>
                        <div class="card-box">
                            <div class="card-block">
                                <h4 class="card-title">Edit User</h4>
								<div class="table-responsive">
								<?php
								$query = mysqli_query($conn,"select * from users where user_id = '$get_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
								?>
									<form method="post">
										<div class="form-group">
											<label>Firstname</label>
											<input class="form-control input focused" value="<?php echo $row['name']; ?>" name="name" id="focusedInput" type="text" placeholder = "Name" required>
										</div>
										<div class="form-group">
											<label>Email</label>
											<input class="form-control  input focused" value="<?php echo $row['email']; ?>"  name="email" id="focusedInput" type="email" placeholder = "Email" required>
										</div>
										<div class="form-group">
											<label>Password</label>
											<input class="form-control  input focused" value="<?php echo $row['password']; ?>"  name="password" id="focusedInput" type="password" placeholder = "Password" required>
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
if (isset($_POST['update'])){

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

mysqli_query($conn,"update users set email = '$email'  , name = '$name' , password = '$password' where user_id = '$get_id' ")or die(mysqli_error());

?>
<script>
  window.location = "admin_user.php"; 
</script>
<?php
}
?>