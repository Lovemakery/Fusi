<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
	    <div class="main-wrapper">
			<?php include('navbar.php'); ?>
				<?php include('files_sidebar.php'); ?>
				<div class="page-wrapper">
					<div class="content">
						<div class="row">
							<div class="col-sm-12">
								<h4 class="page-title">Files </h4>
							</div>
						</div>
						<div class="row">
						<?php include('add_files.php'); ?>
							<div class="col-lg-8">
								<div class="card-box">
									<div class="card-block">
										<h5 class="text-bold card-title">Files List</h5>
										<div class="table-responsive">
										<form action="delete_teacher.php" method="post">
											<table class="table table-striped mb-0">
											<thead>
												   <tr>
														<th><a data-toggle="modal" href="#teacher_delete" id="delete"  class="btn btn-danger" name=""><i class="fa fa-trash-o m-r-5"></i></a><?php include('modal_delete.php'); ?></th>
														<th></th>
														<th></th>
													</tr>
													<tr>
														<th></th>
														<th>Date of Upload</th>
														<th>File Name</th>
														<th>File Size</th>
														<th>Edit</th>
													</tr>
												</thead>
												<tbody>
														<?php
														$teacher_query = mysqli_query($conn,"select * from files") or die(mysqli_error());
														while ($row = mysqli_fetch_array($teacher_query)) {
														$id = $row['file_id'];
															?>
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>	 
														<td><?php echo $row['fdatein']; ?></td> 
													   <td><?php echo $row['filename']  ?></td>
													   <td><?php echo $row['fileSize']  ?></td>
														<td width="50"><a href="edit_files.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="fa fa-pencil m-r-5"></i></a></td>
														
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