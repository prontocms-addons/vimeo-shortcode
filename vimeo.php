<?php

use Pronto\ShortcodeContainer;

ShortcodeContainer::add('vimeo', function($attributes) {
	$vimeo = array_shift($attributes);
	$append = array();
	foreach($attributes as $key => $val) {
		$append[] = ' '.$key.'="'.$val.'"';
	}
	return '<iframe href="https://player.vimeo.com/video/'.$vimeo.'"'.implode($append).'></iframe>';
});

?>