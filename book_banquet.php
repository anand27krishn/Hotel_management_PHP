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
	
    <title>banquet_booking</title>
</head>
<body bgcolor="white">

<font size=4><a href="index.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="accomodation.php">Accomodation</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="PhotoGallery.php">Photo Gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Overview.php">Overview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="FeedbackForm.php">Feedback</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="AboutPatna.php">About Patna</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ContactUsNew.php">Contact Us</a></font><br /><br />

<strong><font size=7 color="black">Banquet-Hall booking</font></strong>
<center>
<hr color="black" size=1><br />

<div style="float: right; ">
    <img src="images\BanquetHalls\banquet_quote.jpg" height="350" width="900" ><br />
    <hr color="black" size=1 ><br />
</div>


<div style="float: left;">
    <marquee behaviour="slide" direction="down" scrollamount=4>
        <img src="images\BanquetHalls\bq1.jpg" alt="No Image found!" height="200" width="280" hspace=55><br />
        <img src="images\BanquetHalls\bq2.jpg" alt="No Image found!" height="200" width="280" hspace=55><br />
        <img src="images\BanquetHalls\bq3.jpg" alt="No Image found!" height="200" width="280" hspace=55><br />
    </marquee>
    <br /><font size=4 >Kautilya Hall</font>
    <br /><font size=4 >........................................................</font>
    <br /><font size=4 >Chanakya Hall</font>
    <br /><font size=4 >........................................................</font>
    <br /><font size=4 >Nalanda Hall</font>
    <br /><font size=4 >........................................................</font>
    <br /><font size=4 >Darbar I & Darbar II</font>
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

<form name="banquet_page" method="post" action="#">
<font size=4 color="black"> 
    <table bgcolor="lightblue" cellpadding=10 cellspacing=10 width=67% style="float: right;" >
    
        <td>Name:</td><td><input type=text name="txt1"></td></tr>
        
        <tr><td>Address:</td><td><textarea rows="5" name="adr1"></textarea><br /><br /></td></tr>

        <td>City:</td><td><input type=text name="txt2"></td></tr>
        
        <td>State:</td><td><input type=text name="txt3"></td></tr>
        
        <td>Pincode:</td><td><input type=text name="txt4"></td></tr>
        
        <td>Country:</td><td><input type=text name="txt5"></td></tr>
        
        <td>Phone No:</td><td><input type=text name="txt6" maxlength="11"></td></tr>
        
        <td>Mobile No:</td><td><input type=text name="txt7" maxlength="10"></td></tr>
        
        <td>Email:</td><td><input type=text name="txt8"></td></tr>
        
        <tr><th>Banquet Required</th></tr>
        
        <td>Type of function:</td><td><input type=text name="txt9"></td></tr>
        
        <tr><td>Date of Function:</td>
        <td>
        <select name="dd_dof">
            <option>DD</option>
            <option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option>
            <option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option>
            <option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
            <option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
        </select>
        
        <select name="mm_dof">
            <option>MM</option>
            <option>Jan</option><option>Feb</option><option>Mar</option><option>Apr</option><option>May</option><option>Jun</option><option>Jul</option>
            <option>Aug</option><option>Sep</option><option>Oct</option><option>Nov</option><option>Dec</option>
        </select>

        <select name="yy_dof">
            <option>YY</option>
            <option>2014</option>
            <option>2015</option>
        </select>
        </td></tr>
        
        <tr><td>Any Alternative Date:</td>
        <td>
        <select name="dd_aad">
            <option>DD</option>
            <option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option>
            <option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option>
            <option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
            <option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
        </select>
        
        <select name="mm_aad">
            <option>MM</option>
            <option>Jan</option><option>Feb</option><option>Mar</option><option>Apr</option><option>May</option><option>Jun</option><option>Jul</option>
            <option>Aug</option><option>Sep</option><option>Oct</option><option>Nov</option><option>Dec</option>
        </select>

        <select name="yy_aad">
            <option>YY</option>
            <option>2014</option>
            <option>2015</option>
        </select>
        </td></tr>
        
        <td>Number of Guaranteed Guests:</td><td><input type=text name="txt10"></td></tr>
        
        <tr><td>Starting Time:</td>
        <td>
        <select name="hr_st">
            <option>Hour</option>
            <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option>
            <option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option>
            <option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option>
        </select>
        
        <select name="min_st">
            <option>Minutes</option>
            <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option>
            <option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option>
            <option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
            <option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
            <option>32</option><option>33</option><option>34</option><option>35</option><option>36</option><option>37</option><option>38</option><option>39</option>
            <option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option><option>46</option><option>47</option>
            <option>48</option><option>49</option><option>50</option><option>51</option><option>52</option><option>53</option><option>54</option>
            <option>55</option><option>56</option><option>57</option><option>58</option><option>59</option>
        </select>

        <select name="st">
            <option>AM</option>
            <option>PM</option>
        </select>
        </td></tr>
        
        <tr><td>Ending Time:</td>
        <td>
        <select name="hr_end">
            <option>Hour</option>
            <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option>
            <option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option>
            <option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option>
        </select>
        
        <select name="min_end">
            <option>Minutes</option>
            <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option>
            <option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option>
            <option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
            <option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
            <option>32</option><option>33</option><option>34</option><option>35</option><option>36</option><option>37</option><option>38</option><option>39</option>
            <option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option><option>46</option><option>47</option>
            <option>48</option><option>49</option><option>50</option><option>51</option><option>52</option><option>53</option><option>54</option>
            <option>55</option><option>56</option><option>57</option><option>58</option><option>59</option>
        </select>

        <select name="end">
            <option>AM</option>
            <option>PM</option>
        </select>
        </td></tr>
        
        <tr><td>Mode of Payment</td><td>
            <input type=radio name="r1" value="Cash">Cash<br />
            <input type=radio name="r1" value="Demand Draft">Demand Draft<br />
            <input type=radio name="r1" value="Credit Card">Credit Card<br />
        </td></tr>
        
        <tr><td colspan=2><input type="submit" name="sub" value="Submit">

        <input type="reset" name="res" style="float: right;" value="Reset"></td></tr><br />


</table>
</font>

</form>


</body>
</html>


<?php

if(isset($_REQUEST["sub"])){
    
    $name=$_REQUEST['txt1']; $address=$_REQUEST['adr1']; $city=$_REQUEST['txt2']; $state=$_REQUEST['txt3']; $pincode=$_REQUEST['txt4']; $country=$_REQUEST['txt5']; $phoneno=$_REQUEST['txt6']; $mobile=$_REQUEST['txt7']; $email=$_REQUEST['txt8']; $tofun=$_REQUEST['txt9']; $dofun=$_REQUEST['dd_dof'].'-'.$_REQUEST['mm_dof'].'-'.$_REQUEST['yy_dof']; $aad=$_REQUEST['dd_aad'].'-'.$_REQUEST['mm_aad'].'-'.$_REQUEST['yy_aad']; $guests=$_REQUEST['txt10']; $starttime=$_REQUEST['hr_st'].'-'.$_REQUEST['min_st'].'-'.$_REQUEST['st']; $endtime=$_REQUEST['hr_end'].'-'.$_REQUEST['min_end'].'-'.$_REQUEST['end']; $paymode=$_REQUEST['r1'];
    
    mysql_connect("localhost", "root", "");
    mysql_selectdb("hotelfeedback");
    
    $query="insert into banquetbook values('$name', '$address', '$city', '$state', '$pincode', '$country', '$phoneno', '$mobile', '$email', '$tofun', '$dofun', '$aad', '$guests', '$starttime', '$endtime', '$paymode')";
    
    $res_set=mysql_query($query);
    
    if($res_set){
?>

        <script>alert('Form Submitted')</script>


    <?php
    }
}

?>