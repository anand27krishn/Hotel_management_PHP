<!DOCTYPE HTML>
<!DOCTYPE HTML PUBLIC="-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>FeedbackSubmit</title>
    <style>
        a:hover{
            color: green;
        }
        
    </style>
	<meta http-equiv="content-type" content="text/html" charset="utf-8"/>
</head>

<body>

    <?php
        if(isset($_POST['fbSubmit']))
        {
            $FeedNo = 0;
            $FeedName=$_POST['fbName'];
            $FeedCity=$_POST['fbCity'];
            $FeedContactNo=$_POST['fbContactNo'];
            $FeedEmailID=$_POST['fbEmailID'];
            $FeedFeed=$_POST['fbFeed'];
            $r1=$_POST['radio1'];
            $r2=$_POST['radio2'];
            $r3=$_POST['radio3'];
            $r4=$_POST['radio4'];
            $r5=$_POST['radio5'];
            $r6=$_POST['radio6'];
            $r7=$_POST['radio7'];
            $r8=$_POST['radio8'];
            
            mysql_connect("localhost", "root", "");
            mysql_selectdb("hotelfeedback");
         
            $q = "select max(FeedNo) from feedback";
            $FeedMax=mysql_query($q);
            $getMax = mysql_fetch_row($FeedMax);
            $FeedNo=$getMax[0] + 1;
               
            $insert_qry="insert into feedback values('$FeedNo', '$FeedName', '$FeedCity', '$FeedContactNo', '$FeedEmailID', '$FeedFeed', '$r1', '$r2', '$r3', '$r4', '$r5', '$r6', '$r7', '$r8')";
            $res_set=mysql_query($insert_qry);
            
            if($res_set){
                $str=<<<END
                 <center>
                 <h1>THANK YOU FOR YOUR VALUABLE TIME!!<br>WE VALUE YOUR FEEDBACK<br><br><br>WE LOOK FORWARD TO<br>PROVIDE YOU WITH MUCH BETTER SERVICES IN FUTURE<br><br>VISIT US AGAIN<br><br>HAVE A GOOD DAY!</h1><br><br><br>
                 <h1><a href="index.php">RETURN TO HOME</a></h1>
                 
                 </center>
END;
                echo "$str";
                ?>
                
                <script>alert('Form Submitted')</script>
                
                <?php
            }
            else{
                $str= <<<END
                <center><h1>We Regret our failure in this service please try again !
                <br /><br /><img src='images\icons\Sorry.jpg' height='400px' width='400px' /><br /><br /></h1>
                <h1><a href="index.php">RETURN TO HOME</a></h1>
                <h1><a href="FeedbackForm.php">FILL FEEDBACK FORM AGAIN</a></h1>
END;
                echo "$str";
            }
        }
    ?>
    
</body>
</html>