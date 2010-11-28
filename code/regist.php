 <?php 
         // Connects to your Database 
         include 'library/config.php';
        include 'library/opendb.php';
      $username=$_POST['name'];
$email=$_POST['eid'];
$password=$_POST['pswd'];
$cont=$_POST['cntno'];
$collg=$_POST['college'];
$bran=$_POST['branch'];
$bat=$_POST['batch'];
$gen=$_POST['gender'];
$accn=$_POST['accomdation'];   
     
           // now we insert it into the database
            $sql_result="insert into candidate(username,mail,pass,cont,collg,bran,
batch,gender,accn) values('$username','$email','$password','$cont',
'$collg','$bran',$bat,'$gen','$accn')";
                $add_member = mysql_query($sql_result);         

$to = $email;
$msg="Hi $username .\r\n"; 
$msg.="<br>";
$msg.="<br>";
$msg .='Thanks for registering for the Sankalp2010'. "\r\n";
$msg.="<br>";
$msg.="Your username:$username .\r\n";
$msg.="<br>";
$msg.="Your password:$password .\r\n";
$msg.="<br>";
$msg.="<br>";
$msg.='With Regards'."\r\n";
$msg.="<br>";
$msg.="Sankalp2010 Techteam"; 
//Image in e-mail
$mailimg = '
<img src="http://www.sankalp2010.com/photos/facebook_header.jpg">
';
//Mail Body - Position, background, font color, font size...
$body ='
<html>
<head>
<style>
<!--
body, P.msoNormal, LI.msoNormal
{
background-position: top;
background-color: #336699;
margin-left:  10em;
margin-top: 1em;
font-family: "verdana";
font-size:   10pt;
font-weight:bold ;

}
-->
</style>
</head>
</html> 
';
//To send HTML mail, the Content-type header must be set:
$headers='MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html;charset=iso-8859-1' . "\r\n";
$headers .= 'From:techteam@sankalp2010.com' . "\r\n";
$subject .="Sankalp2010 Registration Details";
$bodys .= "$msg <br>";
$bodys .= "$mailimg";
$body = $bodys. $body;
$body = $bodys;
$result=mail($to, $subject, $body, $headers);
if($result)
{
echo "Registration Completed succesfully";
  }
?>