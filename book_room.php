<!DOCTYPE HTML>
<html>
<head>
    <style>
      img
      {
        border-radius:20px;
      }  
      a
      {
            color: black;
            font-size: 20px;
            text-shadow: black;
      }
      input[type="text"]:focus, input[type="reset"]:hover, input[type="submit"]:hover
        {
            box-shadow: 0px 0px 5px 5px aqua;
        }
      
    </style>
	
    <title>room_booking</title>
</head>
<body bgcolor="white">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size=4><a href="index.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="accomodation.php">Accomodation</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="PhotoGallery.php">Photo Gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Overview.php">Overview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="AboutPatna.php">About Patna</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="ContactUsNew.php">Contact Us</a></font><br /><br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><font size=7 color="black">Room booking</font></strong>
<center>
<hr color="black" size=1><br />

<div style="float: right; ">
    <table>
    <tr>
        <td width="900" height="350" background="images\KingSizeRoom\ks33.jpg" align="bottom">
        <font size=7 face="Edwardian Script ITC" color="white">“And  for those dedicated to the extra good life…We offer exclusive theme Suites, Executive Deluxe & 
        Deluxe rooms with a beautiful blend  of comfort, luxury & elegance”</font>
    </td>
    </tr>
    </table>
    <!<img src="images\KingSizeRoom\ks3.jpg" height="350" width="900" ><br />>
    <hr color="black" size=1 >
</div>


<div style="float: left;">
    <marquee behaviour="slide" direction="down" scrollamount=4 >
        <img src="images\TwinBed\tw7.jpg" alt="No Image found!" height="200" width="280" hspace=55><br />
        <img src="images\Suite\s7.jpg" alt="No Image found!" height="200" width="280" hspace=55><br />
        <img src="images\KingSizeRoom\ks6.jpg" alt="No Image found!" height="200" width="280" hspace=55><br />
        <img src="images\KingSizeRoom\ks2.jpg" alt="No Image found!" height="200" width="280" hspace=55><br />
    </marquee>
    <br /><font size=4 >standard</font><font size=2><br />(INR 5000 per night)</font>
    <br /><font size=4 >........................................................</font>
    <br /><font size=4 >deluxe<br /></font><font size=2>(INR 7500 per night)</font>
    <br /><font size=4 >........................................................</font>
    <br /><font size=4 >executive<br /></font><font size=2>(INR 9999 per night)</font>
    <br /><font size=4 >........................................................</font>
    <br /><font size=4 >suites<br /></font><font size=2>(INR 15555 per night)</font>
    <br /><font size=4 >........................................................</font>
    <br /><br />

    <table bgcolor="lightgray" width=70%><tr><td>
    <strong><font size=5 color="#1B8CA0">Quick Contact</font></strong><br /><br /> 
    <font size=4><strong>Phone :</strong> +91 612 2590683-84</font><br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size=4>+91 612 2591270-71</font><br /><br />
    <strong><font size=4 align=left >Email : </font></strong><br />              
    <font size=4>bookings@hotelpatna.com</font><br /><br />
    </td></tr></table><br /><br />
</div>

<form name="room_page" method="post" action="#">
<font size=4 color="black"> 
    <table bgcolor="lightblue" cellpadding=10 cellspacing=10 width=68% style="float: right;" >

        <tr><td>Name:</td><td><input type=text name="txt1"></td></tr>
        
        <tr><td>Address:</td><td><textarea rows="5" name="adr1"></textarea><br /><br /></td></tr>

        <td>City:</td><td><input type=text name="txt2"></td></tr>
        
        <td>State:</td><td><input type=text name="txt3"></td></tr>
        
        <td>Pincode:</td><td><input type=text name="txt4"></td></tr>
        
        <td>Country:</td><td><input type=text name="txt5"></td></tr>
        
        <td>Phone No:</td><td><input type=text name="txt6" maxlength="11"></td></tr>
        
        <td>Mobile No:</td><td><input type=text name="txt7" maxlength="10"></td></tr>
        
        <td>Email:</td><td><input type=text name="txt8"></td></tr>

        <tr><td>Check-in:</td>
        <td>
        <select name="dd_ci">
            <option>DD</option>
            <option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option>
            <option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option>
            <option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
            <option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
        </select>

        <select name="mm_ci">
            <option>MMM</option>
            <option>Jan</option><option>Feb</option><option>Mar</option><option>Apr</option><option>May</option><option>Jun</option><option>Jul</option>
            <option>Aug</option><option>Sep</option><option>Oct</option><option>Nov</option><option>Dec</option>
        </select>

        <select name="yy_ci">
            <option>2014</option>
        </select>
        </td>

        <tr><td>Check-out:</td>
        <td>
        <select name="dd_co">
            <option>DD</option>
            <option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option>
            <option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option>
            <option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
            <option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
        </select>

        <select name="mm_co">
            <option>MMM</option>
            <option>Jan</option><option>Feb</option><option>Mar</option><option>Apr</option><option>May</option><option>Jun</option><option>Jul</option>
            <option>Aug</option><option>Sep</option><option>Oct</option><option>Nov</option><option>Dec</option>
        </select>

        <select name="yy_co">
            <option>2014</option>
        </select>
        </td>

        <tr><td>Category of room</td>
        <td>
        <select name="category">
            <option>--Select--</option>
            <option>Standard</option>
            <option>Deluxe</option>
            <option>Executive</option>
            <option>Suite</option>
            </select>
        </td>

        <tr><td>Rooms</td>
        <td>
        <select name="rm">
            <option>--Select--</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
        </td>

        <tr><td>Adults</td>
        <td>
        <select name="adult">
            <option>--Select--</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
        </td>

        <tr><td>Children[5-12]</td>
        <td>
        <select name="child">
            <option>--Select--</option>
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
        </td></tr>
        
        <tr><td>Mode of Payment</td><td>
            <input type=radio name="r1" value="Cash">Cash<br />
            <input type=radio name="r1" value="Demand Draft">Demand Draft<br />
            <input type=radio name="r1" value="Credit Card">Credit Card<br />
        </td></tr>

        <tr><td colspan=2>
            <input type="submit" name="sub" value="Submit">

            <input type="reset" name="res" style="float: right;" value="Clear">
        </td></tr>


</table>
</font>
</form>


</body>
</html>


<?php

if(isset($_REQUEST["sub"])){
    
    $name=$_REQUEST['txt1']; $address=$_REQUEST['adr1']; $city=$_REQUEST['txt2']; $state=$_REQUEST['txt3']; $pincode=$_REQUEST['txt4']; $country=$_REQUEST['txt5']; $phoneno=$_REQUEST['txt6']; $mobile=$_REQUEST['txt7']; $email=$_REQUEST['txt8']; $checkin=$_REQUEST['dd_ci'].'-'.$_REQUEST['mm_ci'].'-'.$_REQUEST['yy_ci']; $checkout=$_REQUEST['dd_co'].'-'.$_REQUEST['mm_co'].'-'.$_REQUEST['yy_co']; $categoryroom=$_REQUEST['category']; $rooms=$_REQUEST['rm']; $adults=$_REQUEST['adult']; $children=$_REQUEST['child']; $paymentmode=$_REQUEST['r1'];
    
    mysql_connect("localhost", "root", "");
    mysql_selectdb("hotelfeedback");
    
    $query="insert into roombook values('$name', '$address', '$city', '$state', '$pincode', '$country', '$phoneno', '$mobile', '$email', '$checkin', '$checkout', '$categoryroom', '$rooms', '$adults', '$children', '$paymentmode')";
    
    $res_set=mysql_query($query);
    
    if($res_set){
?>

        <script>alert('Form Submitted')</script>


    <?php
    }
}

?>