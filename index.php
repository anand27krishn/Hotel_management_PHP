<!DOCTYPE HTML PUBLIC="-//w3c//DTD HTML 4.01// EN"
"http://www.w3.org/TR/html4/strict.dtd" >
<html>
<head>
    <title>Welcome to ShrinK</title>
    
    <style>
    
        body{
            background-attachment: fixed;
            color: deepskyblue;
        }
        input[type="text"]:focus, input[type="password"]:focus, input[type="submit"]:hover{
            box-shadow: 0px 0px 5px 5px aqua;
        }
        a{
            display:inline-block;
        	padding:5px 15px 5px 15px;
        	text-align:center;
        	width:200px;
        	height:25px;
        	font-size:23px;
            color: lightblue;
        	font-family:Consolas;
        	text-decoration:none;
        }
        a:hover{
            color: aqua;
            font-size: 28px;
            text-shadow: aqua;
        }
    </style>
    
    <meta http-equiv="content-type" content="text/html" charset="utf-8"/>
</head>
<!----------------------------BODY------------------------------>
<body background="images\backgrounds\PlainDarkBlue.jpg"> 
    <form action="IndexButtonCheck.php" method="post">
    <table style="float: left;">
        <tr>
            <td><input type="text" name="search"></td>
            <td><input type="submit" name="submit_search" value="Search" /></td>
            <td><font size=1 color="deepskyblue" face="comic sans ms"><small>(Powered by Google.in)</small></font></td>
        </tr>
    </table>
   <a style="float: right;" href="SavedWebPages/facebooklink.html"><img src="images\icons\facebook.jpg" width="100" height="60"/></a><br /><br />
        <center>
        
            <font color="DeepSkyBlue" face="Times New Roman">
                <big><big><big><h1>HOTEL VIZUS</h1></big></big></big>
            </font> 
            <font color="white" face="Times New Roman">
                <h2>We make you feel HOME</h2>
            </font>
            
            <hr size="2" width="85%" color="orange" />
            <hr size="2" width="80%" color="orange" />
            
            <img src="images\HotelGallery\Reception1.jpg" height="450px" width="1550px"/><br /><br /><br /><br /><br />
            
            <table border="3" bordercolor="DeepSkyBlue" cellspacing="5" cellpadding="30" width="50%">
                <tr>
                    <td><a href="PhotoGallery.php">Photo Gallery</a></td>
                    <td><a href="Accomodation.php">Accommodation</a></td>
                    <td><a href="Overview.php">Overview</a></td>
                </tr>
                <tr>
                    <td><a href="ContactUsNew.php">Contact Us</a></td>
                    <td><a href="FeedbackForm.php">Feedback</a></td>
                    <td><a href="AboutPatna.php">About Patna</a></td>
                </tr>
            </table><br /><br /><br />
        </center><br /><br /><br />
        <table width=100% cellspacing=50 cellpadding=50>
            <tr>
                <td><font color="aqua" size="3px">&copy;&nbsp;</font><font color="aqua" size=1>2014 Hotel Vizus PATNA. All Rights Reserved.</font></td>
                <td></td><td></td><td></td><td></td>
                <td>
                    <fieldset>
                        <legend>:: Admin Panel ::</legend>
                        <font face="courier new" color="white" size="2">Admin Id : </font><input type="password" name="admin_id" size="20" maxlength="10"><br /><br />
                        <font face="courier new" color="white" size="2">Password : </font><input type="password" name="admin_password" size="20"><br /><br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="admin_login_submit" value="LogIn"/>
                    </fieldset>
                </td>
            </tr>   
        </table>   
    </form>
    <hr />
</body>
</html>