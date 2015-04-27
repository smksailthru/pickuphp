<?php
/**
 * Created by PhpStorm.
 * User: sajitkunnumkal
 * Date: 4/1/15
 * Time: 12:19 PM
 */

namespace FooBarred\Service;
require_once('src/FooBarred/Service/MathService.php');


class MathServiceTest extends \PHPUnit_Framework_TestCase{

    public function testSanity(){
        $this->assertEquals(0,0);
    }

    /**
     * @covers MathService::getVersion
     */
    public function  testVersion(){
        $this->assertEquals(0,MathService::getVersion());
    }

}