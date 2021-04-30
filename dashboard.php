<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
    <body>
	    <div class="main-wrapper">
			<?php include('navbar.php') ?>
				<?php include('sidebar_dashboard.php'); ?>
					<div class="page-wrapper">
						<div class="content">
							<div class="row">
								<?php 
									$query_user = mysqli_query($conn,"select * from users")or die(mysqli_error());
									$count_user = mysqli_num_rows($query_user);
									?>
									
								<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
									<div class="dash-widget">
										<span class="dash-widget-bg1"><i class="fa fa-user-o" aria-hidden="true"></i></span>
										<div class="dash-widget-info text-right">
											<h3><?php echo $count_user; ?></h3>
											<span class="widget-title1">Users<i class="fa fa-check" aria-hidden="true"></i></span>
										</div>
									</div>
								</div>
								<?php 
									$query_files = mysqli_query($conn,"select * from files")or die(mysqli_error());
									$count_files = mysqli_num_rows($query_files);
									?>
											
								<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
									<div class="dash-widget">
										<span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
										<div class="dash-widget-info text-right">
											<h3><?php echo $count_files ?></h3>
											<span class="widget-title2">Files <i class="fa fa-check" aria-hidden="true"></i></span>
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