<?php
/**
 * Created by PhpStorm.
 * User: Enda
 * Date: 25/04/2016
 * Time: 14:26
 */
require_once 'app/fetch.php';

class Fetch_Test extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->test = new fetch;
    }
    //test for that a list of assets are stored
    public function testStoreListOfAstes()
    {
        $this->assertClassHasStaticAttribute('path', 'fetch');
    }
}