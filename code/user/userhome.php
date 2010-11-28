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
		<title>Sankalp2010|UserHome</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="Description" content="Sankalp2010, National Institute of Science and Technology's National Level Techno-Management Festival having events like Paper Presentation,Software Development,Web design,Robotics,Programming">
                <meta name="keywords" content="events,Berhampur,institute, technology, techfest, technical, festival,NIST,Sankalp2010, robotics,Coding,web design,Programming,Electronics,VLSI" >
<!-- leave this for stats -->
                <link rel="alternate" type="application/rss+xml" title="Sankalp2010 RSS Feed" href="http://www.sankalp2010.com/feeds/rss.php" />
                 <link rel="shortcut icon"  href="http://www.sankalp2010.com/photos/sankalp_favicon.ico" />
                <link href='http://fonts.googleapis.com/css?family=Josefin Sans Std Light' rel='stylesheet' type='text/css'>
                <style type="text/css">
              	html, body { height:900px; background-color: #000000; color:#FF0000;}
		body { margin:0; padding:0;  }
		#flashContent { width:100%; height:100%; }
		#content
		{
		margin-left:20px,
		padding-top:2px;
		}
		
		</style>
		
		<script type="text/javascript" language="javascript">
        function checkckbox()
        {
    
        if(document.regevent.event0.checked == false && document.regevent.event1.checked == false && document.regevent.event2.checked == false && document.regevent.event3.checked == false &&
document.regevent.event4.checked == false && document.regevent.event5.checked == false && document.regevent.event6.checked == false && document.regevent.event7.checked == false &&
document.regevent.event8.checked == false && document.regevent.event9.checked == false && document.regevent.event10.checked == false && document.regevent.event11.checked == false &&
document.regevent.event12.checked == false && document.regevent.event13.checked == false && document.regevent.event14.checked == false && document.regevent.event15.checked == false &&
document.regevent.event16.checked == false && document.regevent.event17.checked == false && document.regevent.event18.checked == false && document.regevent.event19.checked == false &&
document.regevent.event20.checked == false && document.regevent.event21.checked == false && document.regevent.event22.checked == false
 && document.regevent.event23.checked == false && document.regevent.event24.checked == false && 
 document.regevent.event25.checked == false && document.regevent.event26.checked == false && document.regevent.event27.checked == false 
 && document.regevent.event28.checked == false)
 
    {
        alert("Please enter atleast one choice");
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
<td><a href="logout.php"><font color="#FF0000">logout</font></a></td></tr> 
<tr><td align="center">
<div style="font-family: 'Josefin Sans Std Light';font-weight:bold;font-style:normal;">
<form name="regevent" action="register_events.php" method="POST" onSubmit="return checkckbox()">
<fieldset>
<legend><font color="#FFFFFF">Register Events</font></legend>
<table align="center" width="100%" style="font-family: 'Josefin Sans Std Light';font-weight:bold;font-style:normal;" >
<tr>
<td><B><font color="#FFFFFF">TECHNOCRACY EVENTS:</font></B></td></tr>
<tr>
<td><input type="checkbox" name="event0" value="Prezentare de Papyrus " />Prezentare de Papyrus(Paper Presentation) </td>
<td><input type="checkbox" name="event1" value="Prezentare de Postere " />Prezentare de Postere (Poster Presentation)</td>
<td><input type="checkbox" name="event2" value="Programmatio de C" />Programmatio de C(C-programming)</td>
<td><input type="checkbox" name="event3" value="Programmatio de JAVA " />Programmatio de JAVA(Java Programming) </td>
</tr>
<tr>
<td>Cybele(Renewable Energy)</td>
<td><input type="checkbox" name="event4" value="Terra Modello" />Terra Modello(Model presentation)</td>
<td><input type="checkbox" name="event5" value="Gaia" />Gaia (Poster Presenation)</td>
</tr>
<tr><td>Proiectare de VLSI</td>
<td><input type="checkbox" name="event6" value="Pspice" />Pspice</td>
<td><input type="checkbox" name="event7" value="Xilinx" />Xilinx</td>
</tr>
<tr>
<td><input type="checkbox" name="event8" value="Etico Hacking" />Etico Hacking(Ethical hacking)</td>
<td><input type="checkbox" name="event9" value="Grafico" />Grafico(Flas designing)</td>
<td><input type="checkbox" name="event10" value="Webestica" />Webestica(Web designing)</td>
</tr>
<tr>
<td>Zeflemist(Quiz)</td>
<td><input type="checkbox" name="event11" value="General" />General </td>
<td><input type="checkbox" name="event12" value="It" />It </td>
<td><input type="checkbox" name="event13" value="Core" />Core</td>
</tr>
<tr>
<td>Ziee de Robotica(Robotics)
<td><input type="checkbox" name="event14" value="Razboi de Roboti " />Razboi de Roboti (Manual)</td>
<td><input type="checkbox" name="event15" value="Cercetasi
 " />Cercetasi (Automatic)
</td>
<td><input type="checkbox" name="event16" value="Castigator" />Castigator (Semi-Automatic)</td>
</tr>
<tr>
<td>Electonika Ferramenta(Hardware Modelling)</td>

<td><input type="checkbox" name="event17" value="Belvedere" />Belvedere(On Spot)</td>
<td><input type="checkbox" name="event18" value="Plantronics" />Plantronics(Hardware Design)
</td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td><font color="#FFFFFF">MANAGEMENT EVENTS:</font></td></tr>
<tr>
<td><input type="checkbox" name="event19" value="Signor Augustus " />Signor Augustus </td>
<td><input type="checkbox" name="event20" value="Aequitas" />Aequitas</td>
<td><input type="checkbox" name="event21" value="Wizad" />Wizad(Wizad)</td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td><font color="#FFFFFF">CULTURAL EVENTS:</font></td></tr>
<tr>
<td><input type="checkbox" name="event22" value="Terpischore" />Terpischore</td>
<td><input type="checkbox" name="event23" value="Dezbatare" />Dezbatare</td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr><td><font color="#FFFFFF">RECREATIONAL EVENTS:</font></td></tr>
<tr>
<td><input type="checkbox" name="event24" value="Resturi de Reciclare " />Resturi de Reciclare (Junk Sense)</td>
<td><input type="checkbox" name="event25" value="Dominus de Computers " />Dominus de Computers (King Of Computers)</td>
<td><input type="checkbox" name="event26" value="Conuero per Tresoro" />Conquero per Tresoro(Treasure Hunt)</td>

</tr>
<tr>
<td><input type="checkbox" name="event27" value="Ares & Aphrodite" />Ares & Aphrodite(Mr and Miss sankalp)</td>
<td><input type="checkbox" name="event28" value="Zona de Batalie" />Zona de Batalie(Gaming)</td>
</tr>
<tr><td align="center"><input type="submit" value="Register" name="Register"/></td></tr>
</table>
</fieldset>
</form>
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