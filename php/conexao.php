<?php
$host = 'localhost';
$user = 'root';
$passwd = '';
$db_name = 'DominusCafes';

$connection = mysqli_connect($host,$user,$passwd,$db_name);

mysql_select_db("DominusCafes")or die(mysql_error());

$safe_value = mysql_real_escape_string($_POST['search']);

$result = mysql_query("SELECT nmCafe FROM tbCafe WHERE `nmCafe` LIKE %$safe_value%");
 while ($row = mysql_fetch_assoc($result)) {
echo "<div id='link' onClick='addText(\"".$row['nmCafe']."\");'>" . $row['nmCafe'] . "</div>";  
 }


?>