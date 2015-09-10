<html>
<head>
Date and Time
</head>
<body>
<?php
date_default_timezone_set("India/Chennai");
$d=date("d:m:y");
$t= date("h:i:sa");
?>
<form action="time1.php" method="POST" ><br>
Name:<input type="text"  name="name"><br>
Address:<input type="text" name="addr"><br>
Date:<input type="text" name="date" value="<?php echo $d;?>"><br>
Time:<input type="text" name="time" value="<?php echo $t;?>"><br>
<input type="submit" name="submit">
</form>
</body>
</html>
