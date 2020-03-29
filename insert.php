<?php
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Form site</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="POST" action="">
	NAME : <input type="text" name="name"><br><br>
	CITY : <input type="text" name="city"><br><br>
	AGE  : <input type="number" name="age"><br><br>
	<input type="submit" name="submit">
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
		}

		$result= mysqli_query($mysqli,"Insert into userdata values('$name','$city','$age') ");

		if($result)
		{
			echo "success";
		}
		else
		{
			echo "Failed";
		}
?>
	

</body>
