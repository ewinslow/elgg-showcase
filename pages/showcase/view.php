<?php
/**
 * View a showcase
 *
 * @package Showcase
 */


$showcase = get_entity(get_input('guid'));

$title = $showcase->title;

elgg_push_breadcrumb($title);

$content = elgg_view_entity($showcase, true);
$content .= elgg_view_comments($showcase);

$body = elgg_view_layout('content', array(
	'title' => $title,
	'content' => $content,
	'filter' => '',
	'header' => '',
));

echo elgg_view_page($title, $body);
