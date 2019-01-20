<!DOCTYPE HTML>
<!DOCTYPE HTML PUBLIC="-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Delete Feed</title>
	<meta http-equiv="content-type" content="text/html" charset="utf-8"/>
</head>

<body>
	<?php
        if(isset($_GET['DF']))
        {
            $delfeed=$_GET['DF'];
            
            mysql_connect("localhost", "root", "");
            mysql_selectdb("hotelfeedback");
            
            $delquery = "delete from feedback where FeedNo=$delfeed";
            $delres = mysql_query($delquery);
            
            header("location:AdminPanel.php");
        }
    ?>
</body>
</html>