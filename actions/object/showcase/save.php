<?php

elgg_make_sticky_form('showcase');

$guid = get_input('guid');

$showcase = new ElggShowcase($guid);

$adding = !$showcase->guid;

$editing = !$adding;

if ($editing && !$showcase->canEdit()) {
	register_error("You do not have permission to edit this showcase!");
	forward(REFERER);
}

if ($adding && !can_write_to_container(0, $container_guid, 'object', 'showcase')) {
	register_error("You do not have permission to add a site to that showcase!");
	forward(REFERER);
}

$address = get_input('address', '', false);
$title = get_input('title', '', false);
$description = get_input('description');
$tags = string_to_tag_array(get_input('tags', ''));

if (empty($title) || empty($address) || empty($description)) {
	register_error("An address, title, and description are required: $title, $address, $description");
	forward(REFERER);
}

$showcase->address = $address;
$showcase->title = $title;
$showcase->description = $description;
$showcase->tags = $tags;

// Now see if we have a file icon
if ((isset($_FILES['icon'])) && (substr_count($_FILES['icon']['type'],'image/'))) {
	$prefix = "showcase/".$showcase->guid;

	$filehandler = new ElggFile();
	$filehandler->owner_guid = $showcase->guid;
	$filehandler->setFilename($prefix . ".jpg");
	$filehandler->open("write");
	$filehandler->write(get_uploaded_file('icon'));
	$filehandler->close();

	$thumbtiny = get_resized_image_from_existing_file($filehandler->getFilenameOnFilestore(),25,25, true);
	$thumbsmall = get_resized_image_from_existing_file($filehandler->getFilenameOnFilestore(),40,40, true);
	$thumbmedium = get_resized_image_from_existing_file($filehandler->getFilenameOnFilestore(),100,100, true);
	$thumblarge = get_resized_image_from_existing_file($filehandler->getFilenameOnFilestore(),200,200, false);

	if ($thumbtiny) {

		$thumb = new ElggFile();
		$thumb->owner_guid = $showcase->guid;
		$thumb->setMimeType('image/jpeg');

		$thumb->setFilename($prefix."tiny.jpg");
		$thumb->open("write");
		$thumb->write($thumbtiny);
		$thumb->close();

		$thumb->setFilename($prefix."small.jpg");
		$thumb->open("write");
		$thumb->write($thumbsmall);
		$thumb->close();

		$thumb->setFilename($prefix."medium.jpg");
		$thumb->open("write");
		$thumb->write($thumbmedium);
		$thumb->close();

		$thumb->setFilename($prefix."large.jpg");
		$thumb->open("write");
		$thumb->write($thumblarge);
		$thumb->close();

		$showcase->icontime = time();
	}
}

try {
	$showcase->save();
	add_to_river('river/object/showcase/create', 'create', elgg_get_logged_in_user_guid(), $showcase->guid);
} catch (Exception $e) {
	register_error("There was a problem saving your showcase!");
	register_error($e->getMessage());
}

elgg_clear_sticky_form('showcase');

forward(get_input('forward', $showcase->getURL()));
