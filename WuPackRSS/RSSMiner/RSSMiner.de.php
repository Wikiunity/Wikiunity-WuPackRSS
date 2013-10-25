<?php
$wgHooks['ParserFirstCallInit'][] = 'wfRSSminorDE';

function wfRSSminorDE(&$parser) {
	$parser->setHook( 'pod-de', 'wfMakeRSSminorDEInclude' );
	
	return true;
}

function wfMakeRSSminorDEInclude( $contents, $attributes, $parser ) {
	$title = Title::newFromText('WikiunityPodcaster-Germany', 4 /*project*/, 177);
	return wfMakeRSSminorDE( $title->getFullURL(), "Podcaster-de" );
}

function wfMakeRSSminorDE($href, $title, $iurl=null) {
	global $wgStylePath;

	if( empty($iurl) ) {	}
	return '<iframe src="http://de.wikiunity.com/w/extensions/RSSMiner/RSSMiner.temp-de.php"  
	width="100%" height="100&" frameborder="0"  align="left">
  <p>Ihr Browser kann leider keine eingebetteten Frames anzeigen:
  Sie k&ouml;nnen die eingebettete Seite &uuml;ber den folgenden Verweis
  aufrufen: <a href="http://de.wikiunity.com/w/extensions/RSSMiner/RSS/wikiunity-podcaster-de.rss">SELFHTML</a></p>
</iframe>';
}