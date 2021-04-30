<?php
		include('dbcon.php');
		session_start();
		$email = $_POST['email'];
		$password = $_POST['password'];

		$query = mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$password'")or die(mysqli_error());
		$count = mysqli_num_rows($query);
		$row = mysqli_fetch_array($query);


		if ($count > 0){
		
		$_SESSION['id']=$row['user_id'];
		
		echo 'true';
		}else{ 
		echo 'false';
		}	
				
		?>