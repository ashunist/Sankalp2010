<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>Send Password...</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Description" content="Sankalp2010, National Institute of Science and Technology's National Level Techno-Management Festival having events like Paper Presentation,Software Development,Web design,Robotics,Programming">
                <meta name="keywords" content="events,Berhampur,institute, technology, techfest, technical, festival,NIST,Sankalp2010, robotics,Coding,web design,Programming,Electronics,VLSI" >
<!-- leave this for stats -->
                <link rel="alternate" type="application/rss+xml" title="Sankalp2010 RSS Feed" href="http://www.sankalp2010.com/feeds/rss.php" />
                <link rel="shortcut icon"  href="http://www.sankalp2010.com/photos/sankalp_favicon.ico" />
                <link href='http://fonts.googleapis.com/css?family=Josefin Sans Std Light' rel='stylesheet' type='text/css'>
		<style type="text/css" media="screen">
		html, body {background-color: #000000;}
		body {  margin:0; padding:0;}
		#flashContent { width:100%; }
		</style>
	</head>
<body>
<table width="100%">
<tr><td align="center">
<div id="flashContent">
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="1024px" height="160px" id="Header1" align="middle">
				<param name="movie" value="Header1.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#000000" />
				<param name="play" value="true" />
				<param name="loop" value="true" />
				<param name="wmode" value="transparent" />
				<param name="scale" value="showall" />
				<param name="menu" value="true" />
				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="Header1.swf" width="1024px" height="160px" >
					<param name="movie" value="Header1.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#000000" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="transparent" />
					<param name="scale" value="showall" />
					<param name="menu" value="true" />
					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="sameDomain" />
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflash">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
		</div>
</td></tr>
<tr><td align="center" height="400">
<div align="center" style="font-family:Josefin Sans Std Light;font-size:15px;">
<font color="#FFFFFF">
<?php
$mailid=$_POST['email'];
include 'library/config.php';
include 'library/opendb.php';
$sqlresult="SELECT  * from candidate where mail= '$mailid'";
$result=mysql_query($sqlresult);
$count=mysql_num_rows($result);
if($count==1)
{
$row=mysql_fetch_array($result);
$password=$row['pass'];
$username=$row['username'];
$to= $mailid;
$msg="Hi $username .\r\n"; 
$msg.="<br>";
$msg.="<br>";
$msg.="Your password:$password\r\n";
$msg.="<br>";
$msg.="<br>";
$msg.="With Regards\r\n";
$msg.="<br>";
$msg.="<br>";
$msg.="Techteam"; 
//Image in e-mail
$mailimg = '
<img src="http://www.sankalp2010.com/photos/email_verification.jpg">
';
//Mail Body - Position, background, font color, font size...

//To send HTML mail, the Content-type header must be set:
$headers='MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html;charset=iso-8859-1' . "\r\n";
$headers .= 'From:techteam@sankalp2010.com' . "\r\n";
$subject ="Regarding Password";
$bodys .= "$msg<br>";
$bodys .= $mailimg;
$body = $bodys;
$result1=mail($to, $subject, $body, $headers);
}
else
{
echo "<h3>Not found your email in our database</h3>";
}

if($result1)
{
echo " <h3>Password Sent  Succesfully To The Mail Specified...</h3>";
  }
  
    
  else
  {
  echo "<h3>Error Occur  While Sending The Passsword</h3>";
  echo "<a href='forgotpassword.php'> . Try again .</a>";
  }
?>
</font> 
</div>
</td></tr>
<tr><td align="center">
<div id="flashContent">
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="1024px" height="50px"  id="Footer" align="middle">
				<param name="movie" value="Footer.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#000000" />
				<param name="play" value="true" />
				<param name="loop" value="true" />
				<param name="wmode" value="transparent" />
				<param name="scale" value="showall" />
				<param name="menu" value="true" />
				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="Footer.swf" width="1024px" height="50px" >
					<param name="movie" value="Footer.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#000000" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="transparent" />
					<param name="scale" value="showall" />
					<param name="menu" value="true" />
					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="sameDomain" />
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflash">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
		</div></td></tr>
</table>

<!-- web toolbar -->
<script src="http://cdn.wibiya.com/Toolbars/dir_0566/
Toolbar_566436/Loader_566436.js"
 type="text/javascript"></script>
 <!-- web toolbar -->
</body>
</html>