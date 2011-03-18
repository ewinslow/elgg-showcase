<?php
/**
 * Add showcase page
 *
 * @package Showcase
 */

$showcase_guid = get_input('guid');
$showcase = get_entity($showcase);

if (!elgg_instanceof($showcase, 'object', 'showcase') || !$showcase->canEdit()) {
	register_error(elgg_echo('showcase:unknown'));
	forward(REFERRER);
}

$title = elgg_echo('showcase:edit');

elgg_push_breadcrumb($title);

$vars = array(
	'entity' => $showcase,
);

$content = elgg_view_form('object/showcase/edit', array(), $vars);

$body = elgg_view_layout('content', array(
	'title' => $title,
	'content' => $content,
	'filter' => '',
	'buttons' => '',
));

echo elgg_view_page($title, $body);