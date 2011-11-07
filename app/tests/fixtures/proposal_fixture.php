<?php
/* Proposal Fixture generated on: 
Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Applications/MAMP/htdocs/groupin/cake/console/templates/default/classes/fixture.ctp on line 24
2011-09-22 12:01:35 : 1316685695 */
class ProposalFixture extends CakeTestFixture {
	var $name = 'Proposal';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'retailer_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'deal_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'purchasinggap_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'percent' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'retailer_id' => 1,
			'deal_id' => 1,
			'purchasinggap_id' => 1,
			'percent' => 1
		),
	);
}
