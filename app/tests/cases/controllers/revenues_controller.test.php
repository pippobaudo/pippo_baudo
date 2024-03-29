<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Applications/MAMP/htdocs/groupin/cake/console/templates/default/classes/test.ctp on line 22
/* Revenues Test cases generated on: 2011-09-22 12:08:42 : 1316686122*/
App::import('Controller', 'Revenues');

class TestRevenuesController extends RevenuesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RevenuesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.revenue', 'app.purchasinggap', 'app.quorum', 'app.pricerange', 'app.proposal', 'app.retailer', 'app.carrier', 'app.referring', 'app.image', 'app.deal', 'app.subcategory', 'app.category', 'app.user', 'app.usergroup', 'app.users_deal', 'app.feedback', 'app.deals_retailer');

	function startTest() {
		$this->Revenues =& new TestRevenuesController();
		$this->Revenues->constructClasses();
	}

	function endTest() {
		unset($this->Revenues);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
