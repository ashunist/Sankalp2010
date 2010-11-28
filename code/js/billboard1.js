if(document.images)
{
var boardnum=0;
var boardspeed=3000;
var url=new Array();
 var billboard=new Array();
  billboard[0]=new Image();
  billboard[0].src="http://www.sankalp2010.com/photos/1.jpg";
  billboard[1]=new Image();
  billboard[1].src="http://www.sankalp2010.com/photos/2.jpg";
  billboard[2]=new Image();
  billboard[2].src="http://www.sankalp2010.com/photos/3.jpg";
 
  url[0]="http://www.indianoceanmusic.com";
  url[1]="http://www.indianoceanmusic.com";
  url[2]="http://www.indianoceanmusic.com";
 }
 //function to rotate the images 
 function rotateboard1()
 {
 if(boardnum < (billboard.length-1))
 {
  boardnum++;
 }
 else
 {
 boardnum=0;
 }
 document.billboard.src=billboard[boardnum].src;
 setTimeout('rotateboard1()',boardspeed);
 }
 //function to jump to the given url
 function jumpbillboard()
 {
 window.location=url[boardnum];
 }
 