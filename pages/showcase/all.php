<?php
/**
 * Elgg showcase plugin everyone page
 *
 * @package ElggShowcase
 */

elgg_set_page_owner_guid(elgg_get_logged_in_user_guid());

$content = elgg_list_entities(array(
	'type' => 'object',
	'subtype' => 'showcase',
	'full_view' => false,
));

$title = elgg_echo('showcase:everyone');

$body = elgg_view_layout('content', array(
	'title' => $title,
	'content' => $content,
));

echo elgg_view_page($title, $body);