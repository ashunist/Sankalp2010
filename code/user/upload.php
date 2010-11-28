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
		<title>Upload|Sankalp2010</title>
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
		if(document.form1.paper.value=="")
		{
		alert("Please enter your file");
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
<div  align="center" style="font-family:Josefin Sans Std Light;font-size:15px;">
<font color="#FFFFFF">
<table  align="center" >
<tr><td><h3>Prezentare de Papyrus (Paper Presentation)</h3></td></tr>
<tr>
<td>
Abstract Submission:
Prezentare de Papyrus (Paper Presentation)</td>
<td><a href="paperabsupload.php" target="_blank">Click here </a></td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr><td><h3>Prezentare de Postere (Poster Presentation)</h3></td></tr>
<tr>
<tr><td>
Abstract Submission:
Prezentare de Postere (Poster Presentation)	</td>
<td><a href="posterabsupload.php" target="_blank">Click here</a></td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr><td><h3>Cybele (Renewable Energy Competition)</h3></td></tr>
<tr>
<td>
Abstract Submission:
Terra Modello (Model Presentation)</td>
<td><a href="renewterraabsupload.php" target="_blank">Click here</a></td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td>
Abstract Submission:
Gaia (Renewable Poster Presentation)</td>
<td><a href="renewgaiaabsupload.php" target="_blank">Click here</a></td>
</tr>
</table>
</font>
</div>
</td></tr>
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