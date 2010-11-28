<?php
session_start();
if(!session_is_registered($_SESSION['username']))
{
header("location:login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>Registered Events in Sankalp2010...</title>
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
		
		<script type="text/javascript" language="javascript">
		function checkform()
		{
		if(document.form1.email.value=="")
		{
		alert("Please enter your email address");
		return false;
		}
		return true;
		}
		</script>
		
		
	</head>
<body>
<table width="100%">
<tr><td align="center">
<div id="flashContent">
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="1024px" height="160px" id="Header3" align="middle">
				<param name="movie" value="Header3.swf" />
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

				<object type="application/x-shockwave-flash" data="Header3.swf" width="1024px" height="160px" >
					<param name="movie" value="Header3.swf" />
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
<tr><td><font color="#FFFFFF">Welcome <?php echo $_SESSION['username']; ?></font></td>
<td><a href="logout.php"><font color="#FFFFFF">logout</font></a></td></tr>
<tr><td align="center">
<div  align="center" style="font-family: 'Josefin Sans Std Light', 
serif;font-weight:bold;font-style:normal; ">
<font color="#ffffff" font-size="20px">
<?php
include 'library/config.php';
include 'library/opendb.php';
$username=$_SESSION['username'];
$event0=$_POST['event0'];
$event1=$_POST['event1'];
$event2=$_POST['event2'];
$event3=$_POST['event3'];
$event4=$_POST['event4'];
$event5=$_POST['event5'];
$event6=$_POST['event6'];
$event7=$_POST['event7'];
$event8=$_POST['event8'];
$event9=$_POST['event9'];
$event10=$_POST['event10'];
$event11=$_POST['event11'];
$event12=$_POST['event12'];
$event13=$_POST['event13'];
$event14=$_POST['event14'];
$event15=$_POST['event15'];
$event16=$_POST['event16'];
$event17=$_POST['event17'];
$event18=$_POST['event18'];
$event19=$_POST['event19'];
$event20=$_POST['event20'];
$event21=$_POST['event21'];
$event22=$_POST['event22'];
$event23=$_POST['event23'];
$event24=$_POST['event24'];
$event25=$_POST['event25'];
$event26=$_POST['event26'];
$event27=$_POST['event27'];
$event28=$_POST['event28'];
$sql1="select * from user_events where username='$username'";
$result1=mysql_query($sql1);
$count=mysql_num_rows($result1);
if($count==0)
{
$sqlquery="insert into user_events(username,paperpresent,posterpresent,cprog,javaprog,renewmodel,renewposter 
,pspice,xilinx,hacking,grafico,webdesign,quizgen,quizit,quizcore,robomanual,roboautomatic,robosemiautomatic ,
belvedere,plantronics,signor,aequitas,wizad,terpischore,dezbatare,junksense,koc,treasurehunt,mrmisssankalp,gaming,regdate)values
('$username','$event0','$event1'
,'$event2','$event3','$event4','$event5','$event6','$event7','$event8','$event9','$event10','$event11','$event12','$event13','$event14',
'$event15','$event16','$event17','$event18','$event19','$event20','$event21','$event22',
'$event23','$event24','$event25','$event26','$event27','$event28',NOW())";
$result=mysql_query($sqlquery);
echo "You are successfully registered for the events";
}
else
{
echo "You are already registered for the events... ";
}

?>
</font>
</div>
</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
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




























?>