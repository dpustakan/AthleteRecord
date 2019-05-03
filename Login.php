<?php 
	include 'connection.php';
	session_start();
 ?>
<html>
<body>
	<center>
		<h1>Athlete Information System</h1>
	<form action="" method="POST">
		<p><input type="text" placeholder="Username" name="username" required /></p>
		<p><input type="password" placeholder="Password" name="password" required /></p>
		<p><input type="submit" value="LOGIN"/></p>
	</form>	
	</center>
</body>
</html>

<?php 
if(isset($_POST['username'])){
	$uname = $_POST['username'];
	$pass = $_POST['password'];
	
	$sql = "SELECT * FROM user WHERE username='$uname' AND password='$pass'";
	
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		$logged_in = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $uname;
		$_SESSION['type'] = $logged_in['type'];
		header('Location: SearchRecord.php');
	}
}
?>