<!DOCTYPE HTML>
<!DOCTYPE HTML PUBLIC="-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Admin Panel</title>
    <style>
        body{
            background-attachment: fixed;
            background-color: black;
            color: red;
        }
        font, li, h1, h2, h3, h4, h5, h6{
            font-family: consolas;
        }
    </style>
	<meta http-equiv="content-type" content="text/html" charset="utf-8"/>
</head>

<body>
    <form action="" method="post">
	
    <font size="2">Welcome Admin</font><br />
    <input style="float: right;" type="submit" name="logout" value="Logout"/>
    <hr color="aquamarine" width=100%/>
    <br />
    &nbsp;&nbsp;&nbsp;&nbsp;<big>:: Menu ::</big><br />
    <ul>
        <li><input type="submit" name="ShowFeed" value="Feedbacks" /><br /></li>
        <li><input type="submit" name="ContactReq" value="Contact Requests"/></li>
        <li><input type="submit" name="Banquet" value="Banquet Booking Requests" /></li>
        <li><input type="submit" name="Room" value="Room Booking Requests" /></li>
    </ul>
    <br /><br />NOTE: Click the button then Scroll Down For Results<br />
    
    </form>
</body>
</html>

<table border=2 cellspacing="10" cellpadding="8" color="red" width=90%>
<?php
    session_start();
    if(!isset($_SESSION['admin_pwd'])){
           header("location:index.php");
    }
    
    if(isset($_POST['ShowFeed'])){
        mysql_connect("localhost", "root", "");
        mysql_selectdb("hotelfeedback");
        
        $showqry = "select * from feedback";
        $showres = mysql_query($showqry);
        
        echo "<tr><td>Feed Id.</td><td>Name</td><td>City</td><td>Contact No.</td><td>Email id</td><td>Feedback</td><td>R1</td><td>R2</td><td>R3</td><td>R4</td><td>R5</td><td>R6</td><td>R7</td><td>R8</td><td>action</td></tr><br>";
        while($disp = mysql_fetch_row($showres)){
            echo "<tr><td>$disp[0]</td>";
            echo "<td>$disp[1]</td>";
            echo "<td>$disp[2]</td>";
            echo "<td>$disp[3]</td>";
            echo "<td>$disp[4]</td>";
            echo "<td>$disp[5]</td>";
            echo "<td>$disp[6]</td>";
            echo "<td>$disp[7]</td>";
            echo "<td>$disp[8]</td>";
            echo "<td>$disp[9]</td>";
            echo "<td>$disp[10]</td>";
            echo "<td>$disp[11]</td>";
            echo "<td>$disp[12]</td>";
            echo "<td>$disp[13]</td>";
            echo "<td><a href=DeleteFeed.php?DF='$disp[0]'>Delete</a></td></tr><br>";
        }
    }
    
    if(isset($_POST['ContactReq'])){
        mysql_connect("localhost", "root", "");
        mysql_selectdb("hotelfeedback");
        
        $showqry = "select * from ContactUs";
        $showres = mysql_query($showqry);
        
        echo "<tr><td>Count</td><td>Name</td><td>Contact No</td><td>Email id</td><td>priority</td><td>query</td></tr><br>";
        while($disp = mysql_fetch_row($showres)){
            echo "<tr><td>$disp[0]</td>";
            echo "<td>$disp[1]</td>";
            echo "<td>$disp[2]</td>";
            echo "<td>$disp[3]</td>";
            echo "<td>$disp[4]</td>";
            echo "<td>$disp[5]</td>";
            echo "<td><a href=DeleteRequest.php?DF='$disp[0]'>Delete</a></td></tr><br>";
        }
    }
    
    if(isset($_POST['Banquet'])){
        mysql_connect("localhost", "root", "");
        mysql_selectdb("hotelfeedback");
        
        $showqry = "select * from banquetbook";
        $showres = mysql_query($showqry);
        
        echo "<tr><td>Name</td><td>Address</td><td>City</td><td>State</td><td>pincode</td><td>country</td><td>phone no</td><td>mobile no</td><td>email</td><td>function</td><td>function date</td><td>alternative date</td><td>no of guests</td><td>start time</td><td>end time</td><td>payment mode</td></tr><br>";
        while($disp = mysql_fetch_row($showres)){
            echo "<tr><td>$disp[0]</td>";
            echo "<td>$disp[1]</td>";
            echo "<td>$disp[2]</td>";
            echo "<td>$disp[3]</td>";
            echo "<td>$disp[4]</td>";
            echo "<td>$disp[5]</td>";
            echo "<td>$disp[6]</td>";
            echo "<td>$disp[7]</td>";
            echo "<td>$disp[8]</td>";
            echo "<td>$disp[9]</td>";
            echo "<td>$disp[10]</td>";
            echo "<td>$disp[11]</td>";
            echo "<td>$disp[12]</td>";
            echo "<td>$disp[13]</td>";
            echo "<td>$disp[14]</td>";
            echo "<td>$disp[15]</td></tr><br>";
        }
    }
    
    if(isset($_POST['Room'])){
        mysql_connect("localhost", "root", "");
        mysql_selectdb("hotelfeedback");
        
        $showqry = "select * from roombook";
        $showres = mysql_query($showqry);
        
        echo "<tr><td>Name</td><td>Address</td><td>City</td><td>State</td><td>pincode</td><td>country</td><td>phone no</td><td>mobile no</td><td>email</td><td>Check in</td><td>Check out</td><td>Room Category</td><td>No of rooms</td><td>Adults</td><td>Children</td><td>payment mode</td></tr><br>";
        while($disp = mysql_fetch_row($showres)){
            echo "<tr><td>$disp[0]</td>";
            echo "<td>$disp[1]</td>";
            echo "<td>$disp[2]</td>";
            echo "<td>$disp[3]</td>";
            echo "<td>$disp[4]</td>";
            echo "<td>$disp[5]</td>";
            echo "<td>$disp[6]</td>";
            echo "<td>$disp[7]</td>";
            echo "<td>$disp[8]</td>";
            echo "<td>$disp[9]</td>";
            echo "<td>$disp[10]</td>";
            echo "<td>$disp[11]</td>";
            echo "<td>$disp[12]</td>";
            echo "<td>$disp[13]</td>";
            echo "<td>$disp[14]</td>";
            echo "<td>$disp[15]</td></tr><br>";
        }
    }
    
    if(isset($_POST['logout'])){
        session_destroy();
        header("location:Logout.php");
    }
?>
</table>