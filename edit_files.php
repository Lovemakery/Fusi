<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
	    <div class="main-wrapper">
			<?php include('navbar.php'); ?>
				<?php include('files_sidebar.php'); ?>
				<div class="page-wrapper">
					<div class="content">
						<div class="row">
							<div class="col-sm-5 col-5">
								<h4 class="page-title">files </h4>
							</div>
							<div class="col-sm-7 col-7 text-right m-b-30">
								 <a href="files.php" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Add Teachers</a>
							</div>
						</div>
						<div class="row">
					    <?php include('edit_files_form.php'); ?>	
							<div class="col-lg-6">
								<div class="card-box">
									<div class="card-block">
										<h5 class="text-bold card-title">files List</h5>
										<div class="table-responsive">
										<form action="delete_teacher.php" method="post">
											<table class="table table-striped mb-0"><thead>
												<tr>
														<th><a data-toggle="modal" href="#teacher_delete" id="delete"  class="btn btn-danger" name=""><i class="fa fa-trash-o m-r-5"></i></a><?php include('modal_delete.php'); ?></th>
														<th></th>
														<th></th>
													</tr>
													<tr>
														<th></th>
														<th>Photo</th>
														<th>Name</th>
														<th>Username</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
												 <?php
													$teacher_query = mysqli_query($conn,"select * from files") or die(mysqli_error());
													while ($row = mysqli_fetch_array($teacher_query)) {
													$id = $row['teacher_id'];
														?>
													<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
													<td width="40"><img class="img-rounded" src="<?php echo $row['location']; ?>" height="50" width="50"></td> 
													<td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td> 
													<td><?php echo $row['username']; ?></td> 
											   
													<td width="30"><a href="edit_teacher.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="fa fa-pencil m-r-5"></i></a></td>
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