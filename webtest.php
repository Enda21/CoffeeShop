<?php
class WebTest extends PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://localhost/coffe/');
    }

    public function testTitle()
    {
        $this->url('http://localhost/coffe/');
        $this->assertEquals('http://localhost/coffe/', $this->title());
    }

}
?>