<?php 
include 'connection.php';
session_start();
 ?>
<html>
<body>
<center>
<h2>Search Athelete</h2>
<form action="" method="POST">	
	<table>
			
		<tr>
			<td>Membership No.</td>
			<td><input type="text" name="memno"/></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="ln"/></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="fn"/></td>
		</tr>	
	</table>
	<input type="submit" value="SEARCH"/>
	<button>CANCEL</button>
	<br>
	<p>Or</p>
	<button><a href="EditRecord.php">ADD ATHLETE</a></button>
	</form>
</center>
</body>
</html>
<?php 
if (isset($_POST['memno'])) {
	$memno=$_POST['memno'];
	$lastname=$_POST['ln'];
	$firstname=$_POST['fn'];
	
	$sql = "SELECT * FROM athlete WHERE member_num=$memno";
	
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		$logged_in = mysqli_fetch_assoc($result);
		if ($lastname = $logged_in['surname']) {
			if ($firstname = $logged_in['firstname']) {
				$_SESSION['membershipno'] = $logged_in['member_num'];
				$_SESSION['lastname'] = $logged_in['surname'];
				$_SESSION['firstname'] = $logged_in['firstname'];
				$_SESSION['address'] = $logged_in['address'];
				$_SESSION['dob'] = $logged_in['dob'];
				$_SESSION['gender'] = $logged_in['gender'];
				$_SESSION['status'] = $logged_in['status'];
				$_SESSION['postalcode'] = $logged_in['postal_code'];

				$grd = $logged_in['emergency_contact_id'];
				$sql2 = "SELECT * FROM guardian WHERE id=$grd";
	
				$result2 = mysqli_query($conn, $sql2);
				if (mysqli_num_rows($result2) > 0) {
					$guardian = mysqli_fetch_assoc($result2);
					$_SESSION['grdfn']=$guardian['first_name'];
					$_SESSION['grdln']=$guardian['last_name'];
					$_SESSION['grdaddress']=$guardian['address'];
					$_SESSION['grdphone']=$guardian['phone'];
					$_SESSION['grdpostalcode']=$guardian['postal_code'];
				}
				if ($_SESSION['type']=="coach") {
					header('Location: EditRecordCoach.php');
				}else{
					header('Location: EditRecord.php');
				}
			}
		}
	}
}
?>