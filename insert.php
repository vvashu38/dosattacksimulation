

<!DOCTYPE html>
<html>
<head>
<title>Form site</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="POST" action="">
	<p> NAME : <input type="text" name="name" value=''></p>
	<p> CITY : <input type="text" name="city" value=''></p>
	<p> AGE  : <input type="number" name="age" value=''></p>
	<input type="submit" name="submit" value="Submit">
</form>

<?php
		$name = '';
		$city = '';
		$age = '';
		include("config.php");
		if(isset($_POST['submit']))
		{
			$name = $_POST['name'];
			$city = $_POST['city'];
			$age = $_POST['age'];
			$result= mysqli_query($mysqli,"Insert into userdata values('$name','$city','$age') ");
			
			if($result)
			{
				echo "success";
			}
			else
			{
				echo "Failed";
			}
		}

		
?>
	

</body>
