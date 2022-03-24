<?php 

$conn = mysqli_connect('localhost','root','','iamstaocube');

if(!$conn){

	die("QUERY FAILED" . mysqli_error($conn));
}



?>