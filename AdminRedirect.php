<!DOCTYPE HTML>
<!DOCTYPE HTML PUBLIC="-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Admin Redirect</title>
	<meta http-equiv="content-type" content="text/html" charset="utf-8"/>
</head>

<body>


<?php
session_start();
    if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_pwd'])){
           header("location:AdminPanel.php");
    }
    else{
        header("location:index.php");
    }
?>
</body>
</html>