<html>
<head>
	<title>Message Sent</title>
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.min.css" >
	<link type = "text/css" rel = "stylesheet" href = "css/global.css" >
	<link type = "text/css" rel = "stylesheet" href = "style.css" >
</head>
<body>

</body>
</html>

<?php 

	include "Config.php";
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$is_approved = 'N';
	$query = "INSERT INTO message(name,email,message,date_posted,is_approved) VALUES ('{$name}','{$email}','{$message}',CURRENT_DATE,'{$is_approved}')";
	$result = mysql_query($query);
	if (!empty($result)) {
		echo "<script> window.location.href = 'backEnd.php'; alert('Message Successfully Created!'); </script>";
	} else {
		echo "<script> window.location.href = 'frontEnd.php'; alert('Unable to Create Message!'); </script>";
	}
 
 ?>