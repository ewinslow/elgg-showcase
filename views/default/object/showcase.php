<?php
/**
 * Elgg showcase view
 *
 * @package ElggBookmarks
 */

$showcase = $vars['entity'];

$icon = elgg_view_entity_icon($showcase, 'large');

$body = elgg_view('output/longtext', array('value' => $showcase->description));

echo elgg_view_image_block($icon, $body);