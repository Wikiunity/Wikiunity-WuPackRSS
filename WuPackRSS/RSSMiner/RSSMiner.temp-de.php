<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
<title>Podcaster Miner Extensions by Michael McCouman jr.</title>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<meta http-equiv="content-language" content="de">
<meta name="generator" content="Wikiunity Service by Michael McCouman jr.">
<meta name="author" content="Michael McCouman jr.">
<style type="text/css">
<!--
div#bg{
	background-color: #FFFFFF;
    background-image: -moz-linear-gradient(center top , #FFFFFF, #FFFFFF 75%, #F5F5F5);
    border: 0 none;
    border-radius: 7px 7px 7px 7px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.35);
    height: auto;
	font-family:sans-serif;
}
.headtitle{
	margin-bottom:12px;
	font-family: sans-serif;
	display:none;
}
div#contente{
	font-family: sans-serif;
	border:1px dashed #000;
}

li#links{
	border-bottom:1px dashed #eee; 
	font-family: sans-serif;
	text-decoration:none; 
	list-style-type: none; 
	list-style: none;
}
#links:hover{
	background:#eef;
	font-family: sans-serif;
}
ul#feed{
	font-family: sans-serif;
	margin-left: -20px;
    margin-right: 30px;
}
#wu-link {
	background: #008BE3;
    background-image: -moz-linear-gradient(center top , #008BE3 35%, #006CB0 65%);
    border: 1px solid #A5CBE3;
    border-radius: 4px 4px 4px 4px;
    float: right;
    font-size: 10px;
    height: 17px;
    line-height: 16px;
    padding: 4px 15px;
    position: relative;
	font-family: sans-serif;
    top: 1px;
}
#wu-link a {
    text-decoration: none !important;
	font-family: sans-serif;
}
#wu-link:hover {
	background:#005F9C;
    background-image: -moz-linear-gradient(center top , #005F9C 35%, #007FCF 65%);
	font-family: sans-serif;
}
#wu-link:hover a {
    text-decoration: none !important;
	font-family: sans-serif;
}
-->
</style>
</head>
<body>

<?php
define('MAGPIE_CACHE_DIR', 'cache');
define('MAGPIE_CACHE_AGE', '600');
require_once('rss_fetch.inc');
$url = 'http://de.wikiunity.com/w/extensions/RSSMiner/RSS/wikiunity-de-podcaster-rss.xml';

if ( $url ) {
$num_items = 30;
$rss = fetch_rss( $url );
$items = array_slice($rss->items, 0,$num_items);
echo "<div class='headtitle'>".$rss->channel['title']. "</div>";}

echo "<div id='content'>";
echo "<ul id='feed'>";
foreach ($items as $item) {
$href = $item['link'];
$title = $item['title'];
echo "<li id='links'>
		<div id='hover'><a href=$href target='_blank'>$title</a></div>
	</li>";}
echo "</ul>";
?> 
	
</div>
</div>
</body>
</html>