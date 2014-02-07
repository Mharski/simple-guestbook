<?php 
	include "Config.php";
	$query = "SELECT * FROM message";
    $result = mysql_query($query);

    if(mysql_num_rows($result) > 0 ){
        $row = array();
        while($record = mysql_fetch_assoc($result)){
            $row[] = $record;
        }
    }
 ?>
<html>
<head>
	<title>Show List</title>
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.min.css" >
	<link type = "text/css" rel = "stylesheet" href = "css/global.css" >
	<link type = "text/css" rel = "stylesheet" href = "style.css" >
</head>
<header>
	<center>
		<font size='4'>
			<div class = "container fixed-top">
				<div class = "row span12">
					<div class = "well page-header back3 font">
						<b><h1>List of Messages</h1></b>
					</div>
				</div>
			</div>
		<font>
	</center>
</header>
<center>
<body>
<div class = "container-fixed-top"></div>
	<div class = "table table-striped table-bordered table-condensed">
		<div class = "row well span12">
			<table border = "1">
				<tr>
					<thead>
						<tr>
							<td><b>Id</b></td>
							<td><b>Name</b></td>
							<td><b>Email</b></td>
							<td><b>Message</b></td>
							<td><b>Date Posted</b></td>
							<td><b>Approved</b></td>
							<td colspan = "3"><b><center>Action</center></b></td>
						</tr>
					<thead>
				</tr>
				<tbody>
					<?php foreach($row as $records):?>
					<tr>
						<td><?php echo $records['id'];?></td>
						<td><?php echo $records['name'];?></td>
						<td><?php echo $records['email'];?></td>
						<td><?php echo $records['message'];?></td>
						<td><?php echo $records['date_posted'];?></td>
						<td><?php echo $records['is_approved'] ?></td>
						<td>
							<?php 
								$rej = "reject.php?id=";
								$del = "delete.php?id=";
								$appr="approved.php?id=";

								if($records['is_approved'] == 'Y'){
									echo "<form method ='post' action = ".$rej.$records['id']."> <input type ='submit' class = 'btn btn-success' name ='reject' value = 'Reject'></form>";
								}else{
									echo "<form method ='post' action = '".$appr.$records['id']."'> <input type ='submit' class = 'btn btn-primary' name = 'approved' value = 'Approved'></form>";
								}
							?>
						</td>	
						<td>
							<?php echo "<form method ='post' action = ".$del.$records['id']."> <input type ='submit' class = 'btn btn-danger' name = 'delete' value = 'Delete'></form>" ?>
						</td>
					<tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

	<div class = "container-fixed-bottom">
		<div>
			<form method ='post' action = "frontEnd.php">
				<input type = "submit" class = "btn btn-info" value = "Create New Message">
			</form>
		</div>
	</div>

</body>
</center>
</html>