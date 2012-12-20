<?php require('_login.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Secure PHP Login without Database</title>

</head>

<body>

<strong>Welcome back <?php echo $login->username; ?>,</strong><br />
Thank you for logging in.<br /><br />

<a href="logout.php">Logout</a>

</body>
</html>
