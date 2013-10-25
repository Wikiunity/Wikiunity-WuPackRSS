<?php
 /****************************Version 5.1***************************/
 /* Wikiunity Extension: RSS Podcast Miner 
 /*
 /* by Michael McCouman jr. 
 /*
 /* Copyright (C)2000-2010
 */ 
if( !defined( 'MEDIAWIKI' ) )
	die();

$wgExtensionCredits['parserhook'][] = array(
	'path'           => __FILE__,
	'name'           => 'PodcasterRssMiner',
	'author' => '[http://de.community.wikiunity.com/wiki/User:McCouman <span style="color:#000;">Michael McCouman jr.</span>]',
	'description'    => 'Diese Erweiterung liest ein Podcaster XML Feed aus',
	'url'            => 'http://www.wikiunity.com',
	'version'		=> '5.1',
);

require_once( "$IP/extensions/RSSMiner/RSSMiner.de.php"); //DE TAG
#require_once( "$IP/extensions/RSSMiner/RSSMiner.eng.php"); //ENG TAG