<html>
<body>
 
 
<?php
$con = mysql_connect("mysql1.000webhost.com","a9748519_annie","supernova52");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("a9748519_menuItm", $con);
 
$sql="INSERT INTO orders (name, phone, address, note)
VALUES
('$_POST[name]','$_POST[phone]', '$_POST[address]','$_POST[note]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added <br> <a href='http://schezuandelight.site88.net/'>Go Back</a>";
 
mysql_close($con)
?>
</body>
</html>