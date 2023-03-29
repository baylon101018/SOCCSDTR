<!DOCTYPE html>
<html lang = "eng">
	<head>
		<meta charset = "utf-8" />
		<title>SOCCS Daily Time Record</title>
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>
	</head>
	<body class = "alert-info">
		<nav class = "navbar navbar-inverse navbar-fixed-top" style="background-color: purple; color: white;" >
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "admin/images/soccs icon.png" width = "50px" height = "50px"/>
					<p class = "navbar-text pull-right" style="color: white;">SOCCS Daily Time Record</p>
				</div>
			</div>
		</nav>
		<div class = "container-fluid" ><center>
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<div class = "col-lg-3"><img src = "admin/images/soccs icon.png" width = "350px" height = "350px"/></div>
			<div class = "col-lg-4 well" >
				<h2 class = "btn btn-success" style="background-color: purple; width: 460px;">Attendance Login</h2>
				<br />
				<div id = "result"></div>
				<br />
				<br />
				<form enctype = "multipart/form-data">
					<div class = "form-group">
						<label>Student ID:</label>
						<input type = "text" id = "student" class = "form-control" required = "required"/>
						<br />
						<br />
						<div id = "error"></div>
						<br />
						<button type = "button" id = "login" class = "btn btn-success btn-block"><span class = "glyphicon glyphicon-login"></span>Login</button>
					</div>
				</form>
			</div><center>
		</div>
		<div class = "navbar navbar-fixed-bottom" style="background-color: purple; color: white;">
			<div class = "container-fluid">
				<center><label>&copy; SOCCS Daily Time Record</label></center>
				
			</div>	
		</div>	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
</html>