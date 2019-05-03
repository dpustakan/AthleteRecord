<?php 
include 'connection.php';
	$mem_id = $_POST['mem_id'];
	$mem_ln = $_POST['mem_ln'];
$sql = "SELECT * FROM athlete WHERE memberid=$mem_id"
$result = mysqli_query($conn, $sql);
$logged_in = mysqli_fetch_assoc($result);
echo $logged_in;
 ?>