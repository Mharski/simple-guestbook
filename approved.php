<?php 
	include "Config.php";

	$id = $_GET['id'];
	$query = "UPDATE message SET is_approved = 'Y' WHERE id = '$id'";
    $result = mysql_query($query);
    if (!empty($result)) {
    	echo "<script> window.location.href = 'backEnd.php';</script>";	
    }
 ?>