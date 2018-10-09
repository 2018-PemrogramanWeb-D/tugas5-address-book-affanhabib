<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>NRP</td>
				<td><input type="text" name="nrp"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$nrp = $_POST['nrp'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		
		include_once("config.php");
				
		$result = mysqli_query($mysqli, "INSERT INTO users(name,nrp,address,email,mobile) VALUES('$name','$nrp','$address','$email','$mobile')");
		
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>