<?php

namespace My\Math\Tests;

use My\Math\Kwadrat;

require_once realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Kwadrat.php');

class KwadratTest extends \PHPUnit_Framework_TestCase
{
    /**
      * @dataProvider getObliczData
      *
      */
      public function testOblicz($a, $b, $c, $string)
      {
          $u = new Kwadrat();
          $u->oblicz($a, $b,$c);
          $this->assertEquals($u->__toString(), $string);
      }

      public function getObliczData()
      {
          return array(
              array(1, -2, -15,'-3' ),
          );
      }

    /**
      * @dataProvider getToStringData
      *
      */
      public function testToString($a, $b,$c, $string)
      {
          $u = new Kwadrat();
          $u->oblicz($a, $b,$c);
          $this->assertEquals($u->__toString(), $string);
      }

      public function getToStringData()
      {
          return array(
              array(1, -2,-15,'-3'),
          );
      }



}
