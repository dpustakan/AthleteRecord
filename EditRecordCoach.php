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
			<td><input type="text" name="member" class="memberno" disabled value="<?php echo $_SESSION['membershipno']; ?>"/></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="lastname" class="lastname" disabled value="<?php echo $_SESSION['lastname']; ?>"/></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="firstname" disabled value="<?php echo $_SESSION['firstname']; ?>"/></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="address" disabled value="<?php echo $_SESSION['address']; ?>"/></td>
		</tr>
		<tr>
			<td>DOB</td>
			<td><input type="date" name="dob" disabled value="<?php echo $_SESSION['dob']; ?>"/></td>
		</tr>
		<tr>
			<td>Gender</td>
			<?php 
			switch ($_SESSION['gender']) {
				case 'm':
					echo "<td> <input type='radio' name='gender' value=male' disabled checked> Male <input type='radio' name='gender' value='female' disabled> Female</td>";
					break;
				
				default:
					echo "<td> <input type='radio' name='gender' value=male' disabled> Male <input type='radio' name='gender' value='female' disabled checked> Female</td>";
					break;
			}
			?>
		</tr>
		<tr>
			<td>Status</td>
			<td> 	<select name="status">
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
			<td><input type="text" name="post1" disabled value="<?php echo $_SESSION['postalcode']; ?>"/></td>
		</tr>
	</table>
	
	<h2>Guardian</h2>
	<table>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="lastname2"  disabled value="<?php echo $_SESSION['grdln']; ?>"/></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="firstname2" disabled value="<?php echo $_SESSION['grdfn']; ?>"/></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="address2" disabled value="<?php echo $_SESSION['grdaddress']; ?>"/></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><input type="text" name="phone" disabled value="<?php echo $_SESSION['grdphone']; ?>"/></td>
		</tr>
		
		<tr>
			<td>Postal Code</td>
			<td><input type="text" name="post2" disabled value="<?php echo $_SESSION['grdpostcode']; ?>"/></td>
		</tr>
	</table>
	<input type="submit" value="SAVE" name="save" />
	<input type="submit" value="DELETE" disabled/>
	<button><a href="searchRecord.php" >CANCEL</a></button>
	</form>
</center>
</body>
</html>
<?php 
}
if(isset($_POST['save'])){
	$status = $_POST['status'];
	$id = $_SESSION['membershipno'];;

	$qry = "UPDATE athlete SET status='$status' WHERE member_num=$id";
	$aaj = mysqli_query($conn, $qry);
	header('Location: searchRecord.php');
}
?>
