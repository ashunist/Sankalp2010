if(document.images)
{
var boardnum=0;
var boardspeed=3000;
var url=new Array();
var billboard=new Array();
  billboard[0]=new Image();
  billboard[0].src="http://www.sankalp2010.com/photos/ind2.jpg";
  billboard[1]=new Image();
  billboard[1].src="http://www.sankalp2010.com/photos/nms.jpg";
  billboard[2]=new Image();
  billboard[2].src="http://www.sankalp2010.com/photos/ind1.jpg";
  
  billboard[3]=new Image();
  billboard[3].src="http://www.sankalp2010.com/photos/ind1.jpg";
  billboard[4]=new Image();
  billboard[4].src="http://www.sankalp2010.com/photos/ind2.jpg";
  billboard[5]=new Image();
  billboard[5].src="http://www.sankalp2010.com/photos/nms.jpg";
 
  url[0]="http://www.indianoceanmusic.com";
  url[1]="http://www.indianoceanmusic.com";
  url[2]="http://www.indianoceanmusic.com";
  url[3]="http://www.indianoceanmusic.com";
  url[4]="http://www.indianoceanmusic.com";
  url[5]="http://www.indianoceanmusic.com";
 }
 //function to rotate the images 
 function rotateboard()
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
 setTimeout('rotateboard()',boardspeed);
 }
 //function to jump to the given url  
 function jumpbillboard()
 {
window.open(url[boardnum]);
 
 }
 