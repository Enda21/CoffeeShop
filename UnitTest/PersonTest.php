<?php
require_once 'person.php';

class PersonTest extends PHPUnit_Framework_Testcase {
	public $test;

public function setup() {
	$this->test = new person("joe");
	}

public function testName()
{
	$name = $this->test->getName();
	
	$this->assertEnda($name ='enda' );
}
}
?>
 