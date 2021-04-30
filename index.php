<?php include('header.php'); ?>
  <body id="login" >
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form id="login_form" class="form-signin" method="post">
						<div class="account-logo">
                            cpay
                        </div>
                        <div class="form-group">
                            <label>Email </label>
                            <input type="email" autofocus="" class="form-control input-block-level" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control input-block-level" id="password" name="password" required>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" name="login" class="btn btn-primary account-btn">Login</button>
                        </div>
                    </form>
						<script>
						jQuery(document).ready(function(){
						jQuery("#login_form").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "login.php",
									data: formData,
									success: function(html){
									if(html=='true')
									{
									$.jGrowl("Welcome to Cpay System", { header: 'Access Granted' });
									var delay = 2000;
										setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
									}
									else
									{
									$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
									}
									}
									
								});
								return false;
							});
						});
						</script>
                </div>
			</div>
        </div>
    </div>
 <?php include('scripts.php'); ?>
</body>

</html>