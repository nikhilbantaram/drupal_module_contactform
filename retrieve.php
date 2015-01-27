<?php
$username="root";
$password="test";
$database="php_mysql_login_system";

mysql_connect("localhost",$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM users";
$result=mysql_query($query);

$num=mysql_num_rows($result);

mysql_close();

echo "<b><center>Database Output</center></b><br><br>";

$i=0;
while ($i < $num) {

$id=mysql_result($result,$i,"id");
$username=mysql_result($result,$i,"username");
$password=mysql_result($result,$i,"password");
$first=mysql_result($result,$i,"first_name");
$last=mysql_result($result,$i,"last_name");
$email=mysql_result($result,$i,"email");


echo "<b>$id</b><br>Username: $username<br>Password: $password<br>Firstname: $first<br>Lastname: $last<br>Email: $email<br><hr><br>";



$i++;
}
?>
