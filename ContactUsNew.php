<!DOCTYPE HTML>
<!DOCTYPE HTML PUBLIC="-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<!--Scripted by Krishn Anand-->
<html>
<head>
	<link href="images\icons\contactus.ico" type="image/icon" rel="icon" />
	<title>Contact Us</title>
	<meta http-equiv="content-type" content="text/html" charset="utf-8"/>
</head>

<body background="images\backgrounds\Abstract1.jpg">
	<?php
      $errors_array = array();

      if(isset($_REQUEST["ContactSubmit"])){
         check_data();
         if(count($errors_array) != 0){
           show_errors();
           show_welcome();
         } 
         else {
           handle_data();
         }
      }
      else {
        show_welcome();
      }
/* ----------------------------------------------------------------------- */
      function check_data()
      {
        global $errors_array;

        if($_REQUEST["ContactName"] == "") {
          $errors_array[] = "<font color='red'>Please enter your Name</font>";
        }
        if($_REQUEST["ContactContact"]==""){
            $errors_array[] = "<font color='red'>Please enter your Contact No.</font>";
        }
        if($_REQUEST["ContactEmailid"]==""){
            $errors_array[] = "<font color='red'>Please enter your Email Id.</font>";
        }
        if($_REQUEST["ContactQuery"]==""){
            $errors_array[] = "<font color='red'>Please enter the query.</font>";
        }
      }

      function show_errors()
      {
        global $errors_array;

        foreach ($errors_array as $err){
          echo $err, "<br>";
        }
      }

      function handle_data()
      {
        $count=0;
        $Name=$_POST['ContactName'];
        $Contact=$_POST['ContactContact'];
        $Emailid=$_POST['ContactEmailid'];
        $Priority=$_POST['ContactPriority'];
        $Query=$_POST['ContactQuery'];
        
        mysql_connect("localhost", "root", "");
        mysql_selectdb("hotelfeedback");
         
        $q = "select max(count) from ContactUs";
        $CountMax=mysql_query($q);
        $getMax = mysql_fetch_row($CountMax);
        $count=$getMax[0] + 1;
        
        $insqry="insert into ContactUs values('$count', '$Name', '$Contact', '$Emailid', '$Priority', '$Query')";
        $res=mysql_query($insqry);
        
        echo "<br><hr><center>Your request has been submitted<br><a href='index.php'>RETURN HOME</a></center><br>";
        echo "<script> alert('Form Submitted') </script>";
      }

      function show_welcome()
      {
        $name = isset($_REQUEST["ContactName"]) ? $_REQUEST["ContactName"] : "";
        $contact = isset($_REQUEST["ContactContact"]) ? $_REQUEST["ContactContact"] : "";
        $email = isset($_REQUEST["ContactEmailid"]) ? $_REQUEST["ContactEmailid"] : "";
        $query = isset($_REQUEST["ContactQuery"]) ? $_REQUEST["ContactQuery"] : "";
        
        

        echo "<p align='right'><a href='index.php'><img src='images\icons\home1.png' height='50px' width='75px'/></a></p>";
        echo "<form action='' method='post'>";
        echo    "<center><h3><font color='white'><big>Submit your details and we will contact you very soon</h3><hr width='75%'/>";
        echo    "<table cellspacing=5 style=' width:25%; border-collapse: ; text-align: center'>";
        echo        "<tr>";
        echo            "<td>Your Name</td>";
        echo            "<td>";
        echo                "<input type='text' name='ContactName' placeholder='Enter your name' value='$name' />";
        echo            "</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<td>Contact No</td>";
        echo            "<td><input type='text' name='ContactContact' value='$contact' placeholder='10 digit phone no'/></td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<td>Email id</td>";
        echo            "<td><input type='text' name='ContactEmailid' value='$email' placeholder='someone@mail.com'/></td>";
        echo        "</tr>";
        echo    "</table><hr width=50%/>";
        echo "<table cellspacing=5 style=' width:31%; text-align: center'>";
        echo    "<tr>";
        echo        "<td>Priority</td>";
        echo        "<td>";
        echo            "<select name='ContactPriority'>";
        echo                "<option>High</option><option selected>Medium</option><option>low</option>";
        echo            "</select>";
        echo        "</td>";
        echo    "</tr>";
        echo    "<tr>";
        echo        "<td>What we can help with? </td>";
        echo        "<td><textarea rows='8' cols='30' name='ContactQuery' value='$query'></textarea></td>";
        echo    "</tr>";
        echo    "<tr></tr>";
        echo    "<tr><td></td><td></td><td><input type='submit' name='ContactSubmit' value='SUBMIT'/></td></tr>";
        echo "</table>";
        echo "</center>";
        
        echo "<input type='hidden' name='contactus_already_seen' value='already_seen'>";
        echo "</form>";
      }
    ?>
    <br /><br /><br /><br /><br /><br />
    <font color="white" size="3px">&copy;&nbsp;</font><font color="white" size=1>2014 Hotel PATNA. All Rights Reserved.</font>
</body>
</html>