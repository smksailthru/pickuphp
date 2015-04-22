<?php
/**
 * Created by PhpStorm.
 * User: sajitkunnumkal
 * Date: 4/2/15
 * Time: 9:40 AM
 */

namespace misc;


class NullSeetTest extends \PHPUnit_Framework_TestCase {

    public function testSetVsNull(){

        $this->assertFalse(isset($nondef));
        $var = null;
        $this->assertFalse(isset($var));
        $this->assertEquals(null,$var);
    }
}
