<!DOCTYPE html>
<?php
	
?>
<html lang = "eng">
	<head>
		<title>SOCCS Daily Time Record</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top" style="background-color: purple; color: white;" >
			<div class = "container-fluid">
				<div class = "navbar-header" >
					<img src = "images/soccs icon.png" width = "50px" height = "50px"/>
					<p class = "navbar-text pull-right" style="color: white;">SOCCS Daily Time Record</p>
				</div>
			</div>
		</nav>
		<div class = "container" style = "margin-top:120px;">
			<div class = "row row-centered" style="">
				<div class = "col-lg-2 col-centered"></div>
				<img src = "images/soccs icon.png" width = "300px" height = "300px"/>
				<div class = "col-lg-2 col-centered"></div>
				<div class = "col-lg-4 col-centered">
					<div class = "panel panel-primary">
						<div class = "panel-heading" style="background-color: purple;">
							<h4>Administration Login</h4>
						</div>
						<div class = "panel-body">
							<form enctype = "multipart/form-data">
								<div id = "username_warning" class = "form-group">
									<label class = "control-label">Username:</label>
									<input type = "text" id = "username" class = "form-control" />
								</div>
								<div id = "password_warning" class = "form-group">
									<label class = "control-label">Password:</label>
									<input type = "password" maxlength = "12" id = "password" class = "form-control" />
								</div>
								<div id = "result"></div>
								<br />
								<button type = "button" class = "btn btn-success btn-block" id = "login_admin"><span class = "glyphicon glyphicon-save"></span> Login</button>
							</form>
						</div>
					</div>
				</div>
			</div>
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