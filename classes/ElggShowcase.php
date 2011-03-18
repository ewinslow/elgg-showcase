<?php
class ElggShowcase extends ElggObject {
	protected function initializeAttributes() {
		parent::initializeAttributes();
		$this->attributes['subtype'] = 'showcase';
		$this->attributes['owner_guid'] = elgg_get_site_entity()->guid;
		$this->attributes['container_guid'] = elgg_get_site_entity()->guid;
		$this->attributes['access_id'] = ACCESS_PUBLIC;
	}
}