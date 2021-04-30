<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
	    <div class="main-wrapper">
			<?php include('navbar.php'); ?>
				<?php include('admin_sidebar.php'); ?>
				<div class="page-wrapper">
					<div class="content">
						<div class="row">
							<div class="col-sm-12">
								<h4 class="page-title">Class </h4>
							</div>
						</div>
						<div class="row">
						<?php include('add_user.php'); ?>
							<div class="col-lg-6">
								<div class="card-box">
									<div class="card-block">
										<h5 class="text-bold card-title">Admin Users List</h5>
										<div class="table-responsive">
										<form action="delete_users.php" method="post">
											<table class="table table-striped mb-0">
											<thead>
												   <tr>
														<th><a data-toggle="modal" href="#user_delete" id="delete"  class="btn btn-danger" name=""><i class="fa fa-trash-o m-r-5"></i></a><?php include('modal_delete.php'); ?></th>
														<th></th>
														<th></th>
													</tr>
													<tr>
														<th></th>
														<th>Name</th>
														<th>Email</th>
														<th>Edit</th>
													</tr>
												</thead>
												<tbody>
															<?php
															$user_query = mysqli_query($conn,"select * from users")or die(mysqli_error());
															while($row = mysqli_fetch_array($user_query)){
															$id = $row['user_id'];
															?>
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td><?php echo $row['name']; ?></td>
														<td><?php echo $row['email']; ?></td>
														<td width="40">
														<a href="edit_user.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="fa fa-pencil m-r-5"></i></a>
														</td>
														</tr>
														<?php } ?>
												</tbody>
											</table>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		<?php include('footer.php'); ?>
		</div>
		<?php include('script.php'); ?>
    </body>

</html>