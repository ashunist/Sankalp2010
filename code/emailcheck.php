<?php
include 'library/config.php';
include 'library/opendb.php';
$emailcheck=$_POST['eid'];
$sqlmail_check="SELECT * from candidate where mail='$emailcheck'";
$result=mysql_query($sqlmail_check);
$count=mysql_num_rows($result);
if($count == 0)
{
echo "true";
}
else
{
echo "false";
}
?>
