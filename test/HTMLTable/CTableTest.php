<?php

namespace phpe\HTMLTable;

/**
 * HTML Form elements.
 *
 */
class CTableTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test
     *
     * @return void
     *
     */
    public function testGetTable()
    {
        $el = new \phpe\HTMLTable\CTable();

        $string = $el->getTable(array(0 => array('tjo' => 'hej', 'san' => 'san')));

        $this->assertNotNull($string);
        $this->assertContainsOnly('string', array($string));
    }






}
