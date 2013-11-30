<?php
/**
 * EmbedPresentation.php - Adds a parser function embedding video from popular sources.
 * See README for details. For licensing information, see LICENSE. For a
 * complete list of contributors, see CREDITS
 */

# Confirm MW environment
if (!defined('MEDIAWIKI')) {
       echo <<<EOT
To install EmbedPresentation, put the following line in LocalSettings.php:
require_once( "\$IP/extensions/EmbedPresentation/EmbedPresentation.php" );
EOT;
    exit( 1 );
}

# Credits
$wgExtensionCredits['parserhook'][] = array(
	'path'        => __FILE__,
	'name'        => 'EmbedPresentation',
	'author'      => array('Jim R. Wilson', 'Andrew Whitworth','Arsen Borovinskiy',),
	'url'         => 'http://k.psu.ru/wiki/Extension:EmbedPresentation',
	'version'     => '1.0',
	'descriptionmsg' => 'embedpresentation-desc'
);
$dir = dirname(__FILE__) . '/';
$wgExtensionMessagesFiles['embedpresentation'] = $dir . 'EmbedPresentation.i18n.php';
require_once($dir . "EmbedPresentation.hooks.php");
require_once($dir . "EmbedPresentation.Services.php");


$wgHooks['ParserFirstCallInit'][] = "EmbedPresentation::setup";
if (version_compare($wgVersion, '1.7', '<')) {
	// Hack solution to resolve 1.6 array parameter nullification for hook args
	function wfEmbedPresentationLanguageGetMagic( &$magicWords ) {
		EmbedPresentation::parserFunctionMagic( $magicWords );
		return true;
	}
	$wgHooks['LanguageGetMagic'][] = 'wfEmbedPresentationLanguageGetMagic';
} else {
	$wgHooks['LanguageGetMagic'][] = 'EmbedPresentation::parserFunctionMagic';
}
