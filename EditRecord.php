<?php 
include 'connection.php';
session_start();
if (isset($_SESSION['membershipno'])) {
?>
<html>
<body>
<center>
<h2>Edit Athelete Data</h2>	
<form action="" method="POST">	
	<table>	
		<tr>
			<td>Membership No.</td>
			<td><input type="text" name="member" class="memberno"  value="<?php echo $_SESSION['membershipno']; ?>" disabled/></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="lastname" class="lastname"  value="<?php echo $_SESSION['lastname']; ?>"/></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="firstname"  value="<?php echo $_SESSION['firstname']; ?>"/></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="address"  value="<?php echo $_SESSION['address']; ?>"/></td>
		</tr>
		<tr>
			<td>DOB</td>
			<td><input type="date" name="dob"  value="<?php echo $_SESSION['dob']; ?>"/></td>
		</tr>
		<tr>
			<td>Gender</td>
			<?php 
			switch ($_SESSION['gender']) {
				case 'm':
					echo "<td> <input type='radio' name='gender' value=male'  checked> Male <input type='radio' name='gender' value='female' > Female</td>";
					break;
				
				default:
					echo "<td> <input type='radio' name='gender' value=male' > Male <input type='radio' name='gender' value='female'  checked> Female</td>";
					break;
			}
			?>
		</tr>
		<tr>
			<td>Status</td>
			<td> 	<select name="status" >
					<?php 
					switch ($_SESSIOM['status']) {
						case 'active':
							echo "<option value='active'>Active</option><option value='inactive'>Inactive</option>";
							break;
						
						default:
							echo "<option value='inactive'>Inactive</option>
				    		<option value='active'>Active</option>";
							break;
					}
					 ?>				    
  					</select>
  			</td>
		</tr>
		<tr>
			<td>Postal Code</td>
			<td><input type="text" name="post1"  value="<?php echo $_SESSION['postalcode']; ?>"/></td>
		</tr>
	</table>
	
	<h2>Guardian</h2>
	<table>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="lastname2"   value="<?php echo $_SESSION['grdln']; ?>"/></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="firstname2"  value="<?php echo $_SESSION['grdfn']; ?>"/></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="address2"  value="<?php echo $_SESSION['grdaddress']; ?>"/></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><input type="text" name="phone"  value="<?php echo $_SESSION['grdphone']; ?>"/></td>
		</tr>
		
		<tr>
			<td>Postal Code</td>
			<td><input type="text" name="post2"  value="<?php echo $_SESSION['grdpostalcode']; ?>"/></td>
		</tr>
	</table>
	<input type="submit" value="SAVE" name="save" />
	<input type="submit" value="DELETE" name="delete" />
	<button><a href="searchRecord.php" >CANCEL</a></button>
	</form>
</center>
</body>
</html>
<?php 
}
if(isset($_POST['save'])){
	$id=$_SESSION['membershipno'];
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

	$qry="UPDATE athlete SET firstname='$fn', surname='$ln', address='$addr', dob='$dob', status='$status', gender='$gender', postal_code='$postal_code' WHERE member_num=$id";
	$aajksdh=mysqli_query($conn, $qry);
	header('Location: searchRecord.php');
}
if (isset($_POST['delete'])) {
	$id=$_SESSION['membershipno'];
	$qry="DELETE FROM athlete WHERE member_num=$id";
	$aajksdh=mysqli_query($conn, $qry);
	header('Location: searchRecord.php');
}
 ?>
