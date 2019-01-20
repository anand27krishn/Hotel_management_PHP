<!DOCTYPE HTML>
<html>
<head>
	<title>IndexButtonCheck</title>
</head>

<body>

<form action="AdminRedirect.php" method="post">

	<?php
        session_start();    
        //------- SEARCH BUTTON ---------//
        if(isset($_POST['submit_search'])){
            $search_string=$_POST['search'];
            header("location:http://www.google.in/search#q=$search_string");
        }
        
        //-------- ADMIN LOGIN BUTTON ----------//
        if(isset($_POST['admin_login_submit'])){
            $adminid = $_POST['admin_id'];
            $adminpwd = $_POST['admin_password'];
            if($adminid=="admin" && $adminpwd=="admin")
            {
                $_SESSION['admin_id']=$adminid;
                $_SESSION['admin_pwd']=$adminpwd;                
                header("location:AdminRedirect.php");
            }
            else{
                header("location:index.php");
            }
        }
    
    ?>
    
</form>
</body>
</html