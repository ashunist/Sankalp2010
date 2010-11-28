<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>Sankalp2010|National Level Techno-Management Symposium of National Institute of Science and Technology</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="Description" content="Sankalp2010, National Institute of Science and Technology's National Level Techno-Management Festival having events like Paper Presentation,Software Development,Web design,Robotics,Programming">
               <meta name="keywords" content="Sankalp,sankalp10,techfest,nist,Berhampur,events,institute,technology,technical,festival,NIST,Sankalp2010,robotics,Coding,webdesign,Programming,Electronics,VLSI" > 
<!-- leave this for stats -->
                <link rel="alternate" type="application/rss+xml" title="Sankalp2010 RSS Feed" href="http://www.sankalp2010.com/feeds/rss.php" />
                <link rel="shortcut icon"  href="http://www.sankalp2010.com/photos/sankalp_favicon.ico" />
                <link href='http://fonts.googleapis.com/css?family=Josefin Sans Std Light' rel='stylesheet' type='text/css'>
                 <script src="js/billboard.js" language="javascript" type="text/javascript"></script>
                <script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
                <style type="text/css">
              	html, body { height:900px; background-color: #000000; }
		body { margin:0; padding:0;  }
		#flashContent { width:100%; height:100%; }
		#content
		{
		margin-left:35px,
		padding-top:0.5px;
		}
		</style>
		
		
<script type="text/javascript">

$(document).ready(function() {        
    
    //Execute the slideShow
    slideShow();

});

function slideShow() {

    //Set the opacity of all images to 0
    $('#gallery a').css({opacity: 0.0});
    
    //Get the first image and display it (set it to full opacity)
    $('#gallery a:first').css({opacity: 1.0});
    
    //Set the caption background to semi-transparent
    $('#gallery .caption').css({opacity: 0.7});

    //Resize the width of the caption according to the image width
    $('#gallery .caption').css({width: $('#gallery a').find('img').css('width')});
    
    //Get the caption of the first image from REL attribute and display it
    $('#gallery .content').html($('#gallery a:first').find('img').attr('rel'))
    .animate({opacity: 0.7}, 400);
    
    //Call the gallery function to run the slideshow, 6000 = change to next image after 6 seconds
    setInterval('gallery()',6000);
    
}

function gallery() {
    
    //if no IMGs have the show class, grab the first image
    var current = ($('#gallery a.show')?  $('#gallery a.show') : $('#gallery a:first'));

    //Get next image, if it reached the end of the slideshow, rotate it back to the first image
    var next = ((current.next().length) ? ((current.next().hasClass('caption'))? $('#gallery a:first') :current.next()) : $('#gallery a:first'));    
    
    //Get next image caption
    var caption = next.find('img').attr('rel');    
    
    //Set the fade in effect for the next image, show class has higher z-index
    next.css({opacity: 0.0})
    .addClass('show')
    .animate({opacity: 1.0}, 1000);

    //Hide the current image
    current.animate({opacity: 0.0}, 1000)
    .removeClass('show');
    
    //Set the opacity to 0 and height to 1px
    $('#gallery .caption').animate({opacity: 0.0}, { queue:false, duration:0 }).animate({height: '1px'}, { queue:true, duration:300 });    
    
    //Animate the caption, opacity to 0.7 and heigth to 100px, a slide up effect
    $('#gallery .caption').animate({opacity: 0.7},100 ).animate({height: '100px'},500 );
    
    //Display the content
    $('#gallery .content').html(caption);
    
    
}

</script>
<style type="text/css">


.clear {
    clear:both
}

#gallery {
    position:relative;
    height:360px
}
    #gallery a {
        float:left;
        position:absolute;
    }
    
    #gallery a img {
        border:none;
    }
    
    #gallery a.show {
        z-index:500
    }

    #gallery .caption {
        z-index:600; 
        background-color:#000; 
        color:#ffffff; 
        height:100px; 
        width:100%; 
        position:absolute;
        bottom:0;
    }

    #gallery .caption .content {
        margin:5px
    }
    
    #gallery .caption .content h3 {
        margin:0;
        padding:0;
        color:#1DCCEF;
    }
    

</style>
</head>
<body Onload="return rotateboard()">
<table width="100%" align="center">
<tr><td align="center">
<div id="flashContent">
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="1024px" height="160px"  id="Header1" align="middle">
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
				<object type="application/x-shockwave-flash" data="Header1.swf" width="1024px" height="160px" > <param name="movie" value="Header1.swf" />
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
<tr><td align="center"> 
<!-- marquee path -->
<table width="90%" align="center">   
<tr><td align="center" width="90%"><p style="font-family: 'Josefin Sans Std Light', serif;font-weight:bold;font-style:normal; "><font color="#990000" font-size="15px"><marquee width="95%" height="20" scrollamount="2" scrolldelay="2" behaviour="scroll" direction="left" >Sankalp2010 website is launched officialy,Last date for the abstract submission of paper and poster has been extended upto 2nd oct </marquee></font></p></td></tr></table>
<!-- marquee path -->
<!-- text part -->
<table width="80%" cellspacing="2px" cellpadding="1px">
<tr><td width="60%" align="right"><div  id="content" align="left" style="font-family: 'Josefin Sans Std Light', serif;font-weight:bold;font-style:normal; "><font color="#ffffff" font-size="20px">
SANKALP-The most challenging, innovative and competitive technical and management symposium has arrived once again to charge up the inner hidden Einsteins and Newtons and Sigmund Freud in you.SANKALP-2010 not only promises to be all what its predecessors were- enlighting, eventful, informative, mind teasing, competive, innovative, challenging and fun-but also add many new and exciting dimensions to it. The stakes were never as high as are this time, neither are the problem statements as interesting and motivating as are this year- to provide you a platform to excel what you are now, to cross the old borders,
 to break the myths and to fly beyond the horizon. 
<br><br>Be it the arena of modern gladiators where your bots have to win the war in robotics(Zeii de Robotica)or the innovative and resourceful will have to come up with new thoughts for (Cybele) and create the magic of electra in (Elektronika Ferramenta ). The sons of abacus will have a reality check in (Dominus de Computers ) and the modern saga will continue with (Programmatio de C ) .
<br><br>Come and experience making on innovation and change, today and beyond ,work and fun all at the same time. And the whole of the world , ready to witness a true conglomeration of might, skills , brains and rage.
</font> </div></td>
<td width="40%" align="right" ><img src="http://www.sankalp2010.com/photos/home.jpg" alt="home" width="90%" align="right"></td></tr>
</table></td></tr>
<!-- text part -->
<tr><td>
<table width="100%">
<tr id="cont"><td width="100%">
<p align="center" style="border:0;"><a href="javascript:jumpbillboard()" ><img src="http://www.sankalp2010.com/photos/ind2.jpg" border="0" title="Indian Ocean" name="billboard" height="284" width="852" style="opacity:0.7;filter:alpha(opacity=70)" onmouseover="this.style.opacity=1;
this.filter.alpha.opacity=100" onmouseout="this.style.opacity=0.7;this.filter.alpha.opacity=70"/></a>
</p>
</td>
</tr>
</table>
</td></tr>
<!-- Subscription part cum fb-->
<tr><td>
<table width="90%">
<tr><td width="60%" align="right"> 
<a href="http://feedburner.google.com/fb/a/mailverify?uri=
Sankalp2010Updates&amp;
loc=en_US" alt="Subscribe to Sankalp2010 Updates by Email" target="_blank"><img src="http://www.sankalp2010.com/photos/email_subscription_low.jpg"  alt="Subscribe to Sankalp2010 Updates" style="opacity:0.4;filter:alpha(opacity=60)"
onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
onmouseout="this.style.opacity=0.6;this.filters.alpha.opacity=60"/></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://labs.google.co.in/smschannels/subscribe/Sankalp2010" target="_blank"><img src="http://www.sankalp2010.com/photos/sms_subscription_low.jpg"  alt="Subscribe to Sankalp2010 Updates by Sms " style="opacity:0.4;filter:alpha(opacity=60)"
onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
onmouseout="this.style.opacity=0.6;this.filters.alpha.opacity=60"/></a>
</td>
<td width="40%" align="right"><iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fsankalp2k10&amp;width=250&amp;connections=10&amp;stream=false&amp;header=true&amp;height=287" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:267px;" allowTransparency="true"></iframe>
</td></tr>
<!-- Subscription part cum fb-->
</table>
</td>
</tr>
<tr><td width="100%">&nbsp;</td></tr>
<tr><td align="center"><div id="flashContent">
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="1024px" height="50px"   id="Footer" align="middle">
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

<script src="http://cdn.wibiya.com/Toolbars/dir_0566/
Toolbar_566436/Loader_566436.js"
 type="text/javascript"></script>
</body>
</html>