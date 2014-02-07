<?php 
	$config = array(
		'host' => 'localhost',
		'password' => 'root',
		'database' => 'message_db');

	$connect = mysql_connect($config['host'],$config['password']) && mysql_select_db($config['database']);
	
 ?>