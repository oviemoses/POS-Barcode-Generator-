<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<html>
<head>
<title>
POS
</title>
<link href="style.css" media="screen" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="header"> Company Name
</div>
<div id="loginform">
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo '<div style="color: red; text-align: center;">',$msg,'</div><br>'; 
	}
	unset($_SESSION['ERRMSG_ARR']);
}
?>
<form action="login.php" method="post">
<span>Username :</span><input type="text" name="username" id="lform" /><br><br>
<span>Password :</span><input type="password" name="password" id="lform" /><br><br>
<span>&nbsp;</span><input id="btn" type="submit" value="Login" id="btn" />
</form>
</div>
</body>
</html>