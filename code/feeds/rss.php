<?php
 echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<rss version="2.0">
	<channel>
		<title>Sankalp2010 Updates... </title>
		<link>http://www.sankalp2010.com</link>
		<description>Feed updates of Sankalp2010 </description>
		<language>en-us</language>
		<copyright>2010 nist.edu</copyright>
		<webMaster>sankalptechteam@sankalp2010.com</webMaster>
		<category>Technical Fest</category>
		<docs>http://www.rssboard.org/rss-specification</docs>
		<image>
			<url>http://www.sankalp2010.com/photos/Logosankalp.jpg</url>
			<title>Sankalp2010</title>
			<link>http://www.sankalp2010.com</link>
			<height>80</height>
			<width>150</width>
			<description>A National Level Technical Symposiumpz</description>
		</image>

<?php

//Connect to the database here

include 'library/config.php';
include 'library/opendb.php';

//Create the SELECT statement and execute it
$query = "SELECT *, DATE_FORMAT(article_time, '%a, %d %b %Y %T PST') AS article_pubdate FROM myrss ORDER BY article_time ";
$result = mysql_query($query);
//Iterate over the rows to create each item
while ($row = mysql_fetch_array($result) )
{
echo '<item>
		<title>'.$row['article_title'].'</title>
		<link>'.$row['article_link'].'</link>
		<description>'.$row['article_description'].'</description>
             	<pubDate>'.$row['article_pubdate'].'</pubDate>
		
	</item>';
}

?>

	</channel>
</rss>
