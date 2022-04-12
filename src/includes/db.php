<?php 

$conn = mysqli_connect('db','root','example','iamstaocube');

if(!$conn){

	die("QUERY FAILED" . mysqli_error($conn));
}



?>