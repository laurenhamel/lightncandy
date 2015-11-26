<?php
/**
 * Generated by build/gen_test
 */
use LightnCandy\LightnCandy;
use LightnCandy\Runtime;

require_once(__DIR__ . '/test_util.php');

class ExpressionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers LightnCandy\Expression::boolString
     */
    public function testOn_boolString() {
        $method = new \ReflectionMethod('LightnCandy\Expression', 'boolString');
        $this->assertEquals('true', $method->invokeArgs(null, array_by_ref(array(
            1
        ))));
        $this->assertEquals('true', $method->invokeArgs(null, array_by_ref(array(
            999
        ))));
        $this->assertEquals('false', $method->invokeArgs(null, array_by_ref(array(
            0
        ))));
        $this->assertEquals('false', $method->invokeArgs(null, array_by_ref(array(
            -1
        ))));
    }
    /**
     * @covers LightnCandy\Expression::listString
     */
    public function testOn_listString() {
        $method = new \ReflectionMethod('LightnCandy\Expression', 'listString');
        $this->assertEquals('', $method->invokeArgs(null, array_by_ref(array(
            array()
        ))));
        $this->assertEquals("'a'", $method->invokeArgs(null, array_by_ref(array(
            array('a')
        ))));
        $this->assertEquals("'a','b','c'", $method->invokeArgs(null, array_by_ref(array(
            array('a', 'b', 'c')
        ))));
    }
    /**
     * @covers LightnCandy\Expression::arrayString
     */
    public function testOn_arrayString() {
        $method = new \ReflectionMethod('LightnCandy\Expression', 'arrayString');
        $this->assertEquals('', $method->invokeArgs(null, array_by_ref(array(
            array()
        ))));
        $this->assertEquals("['a']", $method->invokeArgs(null, array_by_ref(array(
            array('a')
        ))));
        $this->assertEquals("['a']['b']['c']", $method->invokeArgs(null, array_by_ref(array(
            array('a', 'b', 'c')
        ))));
    }
    /**
     * @covers LightnCandy\Expression::toString
     */
    public function testOn_toString() {
        $method = new \ReflectionMethod('LightnCandy\Expression', 'toString');
        $this->assertEquals('[a].[b]', $method->invokeArgs(null, array_by_ref(array(
            0, false, array('a', 'b')
        ))));
        $this->assertEquals('@[root]', $method->invokeArgs(null, array_by_ref(array(
            0, true, array('root')
        ))));
        $this->assertEquals('this', $method->invokeArgs(null, array_by_ref(array(
            0, false, null
        ))));
        $this->assertEquals('this.[id]', $method->invokeArgs(null, array_by_ref(array(
            0, false, array(null, 'id')
        ))));
        $this->assertEquals('@[root].[a].[b]', $method->invokeArgs(null, array_by_ref(array(
            0, true, array('root', 'a', 'b')
        ))));
        $this->assertEquals('../../[a].[b]', $method->invokeArgs(null, array_by_ref(array(
            2, false, array('a', 'b')
        ))));
        $this->assertEquals('../[a\'b]', $method->invokeArgs(null, array_by_ref(array(
            1, false, array('a\'b')
        ))));
    }
}
?>