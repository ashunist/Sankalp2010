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
		<title>Sponsors of Sankalp2010...</title> 
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
                #bottom
               {
                padding-top:400px;
                margin-left:5px; 
               }
               #sponsor
               {
                padding-top:100px;
                text-align:center; 
               } 
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
<tr><td><div style="font-family: 'Josefin Sans Std Light', 
   serif;font-weight:bold;font-style:normal; "><font color="#FFFFFF">Welcome <?php echo $_SESSION['username']; ?></font></div></td>
<td><a href="logout.php"><div style="font-family: 'Josefin Sans Std Light', 
   serif;font-weight:bold;font-style:normal; "><font color="#FFFFFF">logout</font></div></a></td></tr> 
<tr><td align="center"> 
   <div align="center" style="font-family: 'Josefin Sans Std Light', 
   serif;font-weight:bold;font-style:normal; " id="sponsor">
   <font color="#ffffff" font-size="20px">
 <?php
 include 'library/config.php';
 include 'library/opendb.php';
 $username=$_SESSION['username'];
 $sql1="select * from user_events where username='$username'";
 $result=mysql_query($sql1);
 echo "<h2>You are Registered for the events...</h2>";
  while($row=mysql_fetch_array($result))
 {
 
?>
 <table align="center" width="85%">
 <tr><td><?php echo $row['paperpresent']; ?></td>

 <td><?php echo $row['posterpresent']; ?></td>

 <td><?php echo $row['cprog'];?></td>

   <td><?php echo $row['javaprog'];?></td>
 
  <td><?php  echo $row['renewmodel'];?></td></tr>
   
	<tr>
	<td><?php echo $row['renewposter'];?></td>
	<td><?php
	  echo $row['pspice'];
	 ?> </td>
	   <td><?php echo $row['xilinx'];?></td>
	  <td><?php
	    echo $row['hacking']; ?>
	</td>
	<td><?php	 echo $row['grafico'];?>
		 </td></tr>
		<tr><td><?php echo $row['webdesign'];?>
		</td>
 <td><?php echo $row['quizgen'];?></td>
 <td><?php
   echo $row['quizit'];?></td>
   <td><?php
    echo $row['quizcore'];?>
   </td>
	<td><?php echo $row['robomanual'];?></td>
	</tr>
	<tr><td><?php echo $row['roboautomatic'];
	?></td>
<td><?php echo $row['robosemiautomatic'];?>
 </td>
 <td><?php  echo $row['belvedere'];?>
  </td>
  <td><?php
   echo $row['plantronics'];
   ?>
  </td>   
  <td><?php  echo $row['signor'];?></td></tr>
   <tr><td><?php
	 echo $row['aequitas'];?>
	</td>
	  <td><?php  echo $row['wizad'];?>
	 </td>
	   <td><?php echo $row['terpischore'];?>
	  </td>
	    <td><?php echo $row['dezbatare']; ?>
	 </td>
		<td><?php echo $row['junksense'];?></td>
		</tr>
		 <tr><td><?php echo $row['koc'];?>
		</td>
 <td><?php echo $row['treasurehunt'];?>
  </td>
  <td><?php echo $row['mrmisssankalp'];?>
  </td>
  <td><?php  echo $row['gaming'];?>
 </td></tr></table>
<?php
 }

 
 ?>
  </font></div></td></tr> 
<tr><td align="center" id="bottom"> 
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
 
<!-- google analytics tracking -->		
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18370291-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- google analytics tracking -->	

<!-- web toolbar -->
<script src="http://cdn.wibiya.com/Toolbars/dir_0566/
Toolbar_566436/Loader_566436.js"
 type="text/javascript"></script>
 <!-- web toolbar -->
</body> 
</html>