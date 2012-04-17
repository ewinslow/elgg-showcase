<?php

$showcase = $vars['entity'];

$screenshot = array(
	'name' => 'screenshot',
	'id' => 'showcase_screenshot',
);

$address = array(
	'name' => 'address',
	'id' => 'showcase_address',
	'value' => $showcase->address,
);

$title = array(
	'name' => 'title',
	'id' => 'showcase_title',
	'value' => $showcase->title,
);

$description = array(
	'name' => 'description',
	'id' => 'showcase_description',
	'value' => $showcase->description,
);

$tags = array(
	'name' => 'tags',
	'id' => 'showcase_tags',
	'value' => $showcase->tags,
);

$categories = array(
	'name' => 'categories',
	'id' => 'showcase_categories',
	'value' => $showcase->categories,
);

?>

<div>
	<label for="showcase_screenshot"><?php echo elgg_echo('showcase:screenshot'); ?></label>
	<?php echo elgg_view('input/file', $screenshot); ?>
</div>
<div>
	<label for="showcase_address"><?php echo elgg_echo('showcase:address'); ?></label>
	<?php echo elgg_view('input/url', $address); ?>
</div>
<div>
	<label for="showcase_title"><?php echo elgg_echo('title'); ?></label>
	<?php echo elgg_view('input/text', $title); ?>
</div>
<div>
	<label for="showcase_description"><?php echo elgg_echo('description'); ?></label>
	<?php echo elgg_view('input/longtext', $description); ?>
</div>
<div>
	<label for="showcase_tags"><?php echo elgg_echo('tags'); ?></label>
	<?php echo elgg_view('input/tags', $tags); ?>
</div>

<div class="elgg-foot">
<?php
	echo elgg_view('input/hidden', array('name' => 'container_guid', 'value' => 1));
	echo elgg_view('input/hidden', array('name' => 'guid', 'value' => $showcase->guid));
	echo elgg_view('input/submit', array('value' => elgg_echo('submit')));
?>
</div>
