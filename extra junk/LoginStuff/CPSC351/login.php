<!DOCTYPE html>
<html>
	<head>
		<link href="jquery-ui.css" rel="stylesheet">
		<title>Please Log In</title>
		<style>
			body {
				font-family: "Trebuchet MS", sans-serif;
				margin: 50px;
			}
			.inp {
				height: 30px;
				font-size: 16pt;
			}
		
		</style>	
	</head>
	<body>
		<form method="get" action="validate_logon.php">
			<input type="hidden" value="23423" name="userID">
			<input type="text" name="username" class="inp" id="username"><br>
			<input type="password" name="password" class="inp"><br>
			<input type="button" value="Submit" id="go">
		</form>
	<script src="jquery.js"></script>
	<script src="jquery-ui.js"></script>
	<script>
		$("#go").button().click(
			function() {
				$.get("validate_logon.php",function(data){
					alert(data);
				});
			}
		);  
	</script>
	</body>
</html>


