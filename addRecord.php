<?php 
include 'connection.php';
session_start();
?>
<html>
<body>
<center>
<h2>Add Athelete Data</h2>	
<form action="" method="POST">	
	<table>	
		<tr>
			<td>Membership No.</td>
			<td><input type="text" name="member" class="memberno"  value=""/></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="lastname" class="lastname"  value=""/></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="firstname"  value=""/></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="address"  value=""/></td>
		</tr>
		<tr>
			<td>DOB</td>
			<td><input type="date" name="dob"  value=""/></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td> <input type='radio' name='gender' value='male'  checked> Male <input type='radio' name='gender' value='female'> Female</td>
		</tr>
		<tr>
			<td>Status</td>
			<td>
				<select name="status" >
					<option value='active'>Active</option><option value='inactive'>Inactive</option>
  				</select>
  			</td>
		</tr>
		<tr>
			<td>Postal Code</td>
			<td><input type="text" name="post1"  value=""/></td>
		</tr>
	</table>
	
	<h2>Guardian</h2>
	<table>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="lastname2" value=""/></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="firstname2"  value=""/></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="address2"  value=""/></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><input type="text" name="phone"  value=""/></td>
		</tr>
		
		<tr>
			<td>Postal Code</td>
			<td><input type="text" name="post2"  value=""/></td>
		</tr>
	</table>
	<input type="submit" value="ADD" name="ADD" />
	<button><a href="searchRecord.php" >CANCEL</a></button>
	</form>
</center>
</body>
</html>
<?php 
if (isset($_POST['ADD'])) {
	$id=$_POST['member'];
	$ln=$_POST['lastname'];
	$fn=$_POST['firstname'];
	$addr=$_POST['address'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$status=$_POST['status'];
	$postal_code=$_POST['post1'];

	$grdphone=$_POST['phone'];
	$grdfn=$_POST['firstname2'];
	$grdln=$_POST['lastname2'];
	$grdaddr=$_POST['address2'];
	$grdpost=$_POST['post2'];

	$qry = "INSERT INTO athlete VALUES($id,'$fn', '$ln', '$addr', '999', '$gender', '$dob', '$postal_code', '9', '$status')";
	$aajksdh=mysqli_query($conn, $qry);
}
 ?>

