<?php
/**
 * Handles requests to /showcase
 */
class ElggShowcaseIndexHandler {
    
    // TODO(evan): Inject views system and translation dependencies
    public function get() {
        return elgg_view_page(elgg_echo('showcase'), '', 'showcase/index');
    }

}