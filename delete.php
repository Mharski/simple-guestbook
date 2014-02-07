<?php 
	include "Config.php";

    $id = $_GET['id'];
   	$query = "DELETE FROM message WHERE id = '{$id}'";
    $result = mysql_query($query);
    if (!empty($result)){
    	echo "<script> window.location.href = 'backEnd.php'; alert('Message Successfully Deleted!')</script>"; 		
    } else {
    	echo "<script> window.location.href = 'backEnd.php'; alert('Unable to Delete Message!')</script>"; 	
    }
 ?>