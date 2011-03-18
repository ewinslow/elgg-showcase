<?php

function showcase_init() {
	$root = dirname(__FILE__);
	$slug = 'showcase';

	//general
	elgg_register_entity_type("object", 'showcase');

	//menus
	elgg_register_menu_item("site", array(
		"name" => 'showcase',
		"text" => elgg_echo('showcase'),
		"href" => "/$slug/all",
	));

	elgg_register_admin_menu_item('administer', 'add', 'showcase');


	//actions
	$actions_base = "$root/actions/object/showcase";
	elgg_register_action("object/showcase/add", "$actions_base/save.php", 'admin');
	elgg_register_action("object/showcase/edit", "$actions_base/save.php", 'admin');
	elgg_register_action("object/showcase/delete", "$actions_base/delete.php", 'admin');

	//handlers
	elgg_register_page_handler($slug, 'showcase_page_handler');
	elgg_register_plugin_hook_handler('container_permissions_check', 'object', 'showcase_container_permissions');
	elgg_register_entity_url_handler('object', 'showcase', 'showcase_url_handler');
	elgg_register_plugin_hook_handler('upgrade', 'upgrade', 'showcase_upgrade_handler');
}

function showcase_container_permissions($hook, $type, $result, $params) {
	if ($params['subtype'] == 'showcase') {
		return $params['user']->isAdmin();
	}
}

function showcase_page_handler($segments) {
	$slug = 'showcase';

	elgg_push_breadcrumb(elgg_echo('showcase'), "/$slug/all");
	elgg_push_context('showcase');

	$pages = dirname(__FILE__) . '/pages/showcase';

	switch ($segments[0]) {
		case 'all':
			include "$pages/all.php";
			break;

		case 'edit':
			set_input('guid', $segments[1]);
			include "$pages/edit.php";
			break;

		case 'view':
			set_input('guid', $segments[1]);
			include "$pages/view.php";
			break;

		default:
			return false;
	}

	elgg_pop_context();

	return true;
}

function showcase_url_handler($object) {
	$slug = 'showcase';
	//$slug = elgg_get_plugin_setting('slug', 'showcase');
	return objects_url_handler($object, $slug);
}

function showcase_upgrade_handler() {
	if (!update_subtype("object", 'showcase', 'ElggShowcase')) {
		add_subtype("object", 'showcase', 'ElggShowcase');
	}
}

elgg_register_event_handler('init', 'system', 'showcase_init');