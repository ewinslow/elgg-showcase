<?php

$menu = new EvanMenu($return);

$menu->registerItem('showcase', array(
	'href' => '/showcase',
	'text' => elgg_echo('showcase'),
));

return $menu->getItems();
