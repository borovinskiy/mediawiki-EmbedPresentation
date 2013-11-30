<?php

// Build services list (may be augmented in LocalSettings.php)
$wgEmbedPresentationServiceList = array(
    'google' => array(
	'id_pattern'=>'%[^0-9\\-\_\w]%',
	'extern' => '<iframe class="embed" src="https://docs.google.com/presentation/embed?id=$2&start=false&loop=false&delayms=3000" frameborder="0" width="$3" height="$4" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>',
    	),
    'кампус' => array(
	'extern' => '<iframe class="embed" src="http://k.psu.ru/docs/presentations/view/player/$2" width="$3" height="$4" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" allowfullscreen=1 mozallowfullscreen=1 webkitallowfullscreen=1></iframe>',
        ),
);
