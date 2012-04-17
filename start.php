<?php

function showcase_init() {
	//general
	elgg_register_entity_type("object", 'showcase');

	//menus
	elgg_register_menu_item("site", array(
		"name" => 'showcase',
		"text" => elgg_echo('showcase'),
		"href" => "/showcase",
	));

	elgg_register_admin_menu_item('administer', 'pending', 'showcase');
	elgg_register_admin_menu_item('administer', 'featured', 'showcase');

	//actions
	$actions_base = dirname(__FILE__) . "/actions/showcase";
	elgg_register_action("showcase/add", "$actions_base/save.php");
	elgg_register_action("showcase/delete", "$actions_base/delete.php");

	//handlers
	elgg_register_entity_url_handler('object', 'showcase', 'showcase_url_handler');
}

function showcase_url_handler($object) {
	return "/showcase/$object->guid";
}

elgg_register_event_handler('init', 'system', 'showcase_init');
