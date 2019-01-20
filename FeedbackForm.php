<!DOCTYPE HTML>
<!DOCTYPE HTML PUBLIC="-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <link href="images\icons\feedback.ico" type="image/icon" rel="icon"/>
	<title>FeedbackForm</title>
     <style>
    
        body{
            background-attachment: fixed;
            color: black;
        }
        input[type="text"]:focus, input[type="radio"]:hover, input[type="submit"]:hover, input[type="reset"]:hover{
            box-shadow: 0px 0px 5px 5px white;
        }
        td font, td{
            font-family: 'Comic Sans ms';
            color: black;
            size: 15px;
        }
        center table{
            border:solid 3px black;
            width:75%;
            border-collapse: collapse; 
        }
        textarea:focus{
            box-shadow: 0px 0px 5px 5px whitesmoke;
        }
    </style>
	<meta http-equiv="content-type" content="text/html" charset="utf-8"/>
</head>

<body background="images\backgrounds\YellowPaleBlueAbstract.jpg">
    <p align="right"><a href="index.php"><img src="images\icons\home1.png" height="50px" width="75px"/></a></p>
    <form action="FeedbackSubmit.php" method="POST">
    
    <center>
        <h1>We will be pleased to listen from you</h1>
        <h3>Please fill in the feedback form</h3>
        <h4><b><i>Imp: All fields are required. Do not leave any field blank.</i></b></h4>
        <table cellspacing="15" cellpadding="15">
            <tr>
                <td><font>Name : </font></td>
                <td><input type="text" name="fbName" size="50" placeholder="Enter your name"/></td>
            </tr>
            <tr>
                <td><font>City : </font></td>
                <td><input type="text" name="fbCity" size="50" placeholder="Enter City"/></td>
            </tr>
            <tr>
                <td><font>Contact No. : </font></td>
                <td><input type="text" name="fbContactNo" size="50" maxlength="10" placeholder="Enter you 10 digit mobile no"/></td>
            </tr>
            <tr>
                <td><font>Email ID : </font></td>
                <td><input type="text" name="fbEmailID" size="50" placeholder="example@mail.com"/></td>
            </tr>
            <tr>
                <td><font>Complaints/Suggestions : </font></td>
                <td><textarea rows="6" cols="39" name="fbFeed" draggable="false"></textarea></td>
            </tr>
        </table><br />
        <table cellspacing="15" cellpadding="15">
            <tr>
                <th><b><i>Services</i></b></th>
                <th><b><i>Excellent</i></b></th>
                <th><b><i>Good</i></b></th>
                <th><b><i>Not Satisfactory</i></b></th>
            </tr>
            <tr>
                <td>Greetings by hotel staff at arrival</td>
                <td><input type="radio" name="radio1" value="Excellent"/></td>
                <td><input type="radio" name="radio1" value="Good"/></td>
                <td><input type="radio" name="radio1" value="Unsatisfactory"/></td>
            </tr>
            <tr>
                <td>Hotel telephone response</td>
                <td><input type="radio" name="radio2" value="Excellent"/></td>
                <td><input type="radio" name="radio2" value="Good"/></td>
                <td><input type="radio" name="radio2" value="Unsatisfactory"/></td>
            </tr>
            <tr>
                <td>Cleanliness of room</td>
                <td><input type="radio" name="radio3" value="Excellent"/></td>
                <td><input type="radio" name="radio3" value="Good"/></td>
                <td><input type="radio" name="radio3" value="Unsatisfactory"/></td>
            </tr>
            <tr>
                <td>Cleanliness of bathroom</td>
                <td><input type="radio" name="radio4" value="Excellent"/></td>
                <td><input type="radio" name="radio4" value="Good"/></td>
                <td><input type="radio" name="radio4" value="Unsatisfactory"/></td>
            </tr>
            <tr>
                <td>Sense of security</td>
                <td><input type="radio" name="radio5" value="Excellent"/></td>
                <td><input type="radio" name="radio5" value="Good"/></td>
                <td><input type="radio" name="radio5" value="Unsatisfactory"/></td>
            </tr>
             <tr>
                <td>How would you rate the value received for the price paid?</td>
                <td><input type="radio" name="radio6" value="Excellent"/></td>
                <td><input type="radio" name="radio6" value="Good"/></td>
                <td><input type="radio" name="radio6" value="Unsatisfactory"/></td>
            </tr>
             <tr>
                <td>How would you rate your satisfaction with your entire stay experience at our hotel?</td>
                <td><input type="radio" name="radio7" value="Excellent"/></td>
                <td><input type="radio" name="radio7" value="Good"/></td>
                <td><input type="radio" name="radio7" value="Unsatisfactory"/></td>
            </tr>
             <tr>
                <td>If in the area again, will you return to Hotel?</td>
                <td><input type="radio" name="radio8" value="Excellent"/></td>
                <td><input type="radio" name="radio8" value="Good"/></td>
                <td><input type="radio" name="radio8" value="Unsatisfactory"/></td>
            </tr>
        </table><hr color="black"/>
        <input type="submit" name="fbSubmit" value="Submit & Send Feedback" />
        <input type="reset" value="Clear Form Data" />
    </center>
    </form>
     <font color="black" size="3px">&copy;&nbsp;</font><font color="black" size=1>2014 Hotel PATNA. All Rights Reserved.</font>
</body>
</html>