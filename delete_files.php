<?php
include('dbcon.php');
if (isset($_POST['delete_file'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conn,"DELETE FROM files where file_id='$id[$i]'");
}
header("location: files.php");
}
?>