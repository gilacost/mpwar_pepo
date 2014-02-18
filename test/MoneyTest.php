<?php
include_once  __DIR__.'/../src/Money.php';

/**
 * Created by PhpStorm.
 * User: joseplluisgiraltdlacoste
 * Date: 11/02/14
 * Time: 20:56
 */

class MoneyTest extends PHPUnit_Framework_TestCase
{

    public function testCanBeNegated()
    {
        // Arrange
        $a = new Money(1);
        // Act
        $b = $a->negate();
        // Assert
        $this->assertEquals(-1, $b->getAmount());
    }
}
