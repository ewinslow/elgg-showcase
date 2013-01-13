<?php
class ElggShowcase extends ElggObject {
	protected function initializeAttributes() {
		parent::initializeAttributes();
		$this->attributes['subtype'] = 'showcase';
		$this->attributes['access_id'] = ACCESS_PUBLIC;
	}
}