<?php 
	include "Config.php";
	$query = "SELECT * FROM message WHERE is_approved = 'Y'";
	$result = mysql_query($query);
	$row = array();
	if(mysql_num_rows($result) > 0) {
		while ($records = mysql_fetch_assoc($result)){
			$row[] = $records;
		}
	}
 ?>
<html>
<head>
	<title>MESSAGES</title>
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.min.css" >
	<link type = "text/css" rel = "stylesheet" href = "css/global.css" >
	<link type = "text/css" rel = "stylesheet" href = "style.css" >
</head>
<div class = "container fixed-top">
	<div class = "row">
		<div class = "well span4 page-header back3 font fixed-top">
			<center><b><h3>Messages</h3></b></center>
		</div>
	</div> 
</div>

<body>
	<script type="text/javascript">
		function validateForm(){
			var x = document.forms['valForm']['name'].value;
			var y = document.forms['valForm']['email'].value;
			var atpos = y.indexOf("@");
			var dotpos = y.indexOf(".");
			var z = document.forms['valForm']['message'].value;
			if(x == null || x == ''){
				window.alert("Please enter your name!");
				return false;
			}
			if(y.length == null || y.length == ''){
				window.alert("Please enter your Email Address!");
				return false;
			}else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length){
				window.alert("Invalid Email Address!");
				return false;
			}else{
				return true;
			}
			if(z == null || z == ''){
				window.alert("Please enter your Message!");
				return false;
			}
		}
	</script>
<div class="container">
	<div class="row span12">
		<table class = "table table-striped  table-bordered table-condensed span8" border = "1" style ="table-radius:3px">
			<tr class = "back6">
				<thead>
					<tr>
						<td>Name</td>
						<td>Message</td>
						<td>Date Posted</td>
						<td>Approved</td>
					</tr>
				<thead>
			</tr>
			<tbody>
				<?php foreach($row as $records):?>
					<tr>
						<td><?php echo $records['name'];?></td>
						<td><?php echo $records['message'];?></td>
						<td><?php echo $records['date_posted'];?></td>
						<td><?php echo $records['is_approved'] ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
	 	</table>
	</div>
</div>
<center>
<div class = "container fixed-top">
	<div class = "row">
		<div class = "well page-header font back3 ">
	 		<label><b><h3>Post Message</h3></b></label>
	 	</div>
	</div>
</div>
<div class = "container fixed-top">
	<div class = "row">
		<div class = "well back1">
			<form method = "POST" action = "createMessage.php" name = "valForm" onsubmit = "return validateForm()">
				<table class = "well font">
					<tr>
						<td>Name :
						<input type='text' style = "margin-left:23px;padding-right:33px" name='name' placeholder=' Name...' id='name' onblur="check_name()">
						</td>
					</tr>
					<tr>
						<td>Email :
						<input type='text' name='email' style = "margin-left:27px;padding-right:33px" placeholder=' Email...' id='email' onblur="check_email()">
						</td>
					</tr>
					<tr>
						<td>Message :
						<textarea name='message' style = "padding-right:30px;margin-left:6px;padding-bottom:20px" placeholder='Type your Message...' id='sms' onblur='check_sms()'></textarea>
						</td>
					</tr>
					<tr>
						<div class = "pull-right">
						<td>
							<input type='submit' name='submit' class = "btn btn-primary" value='POST MESSAGE' onclick=" return check_all()">
							<input type='reset' value='Clear' class = "btn btn-warning">
						</td>
						</div>		
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
</center>
</body>
</html>