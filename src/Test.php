
//    public function testCanBeNegateds()
//    {
//        // Arrange
//        $a = new Money(1);
//        // Act
//        $b = $a->negate();
//        // Assert
//        $this->assertEquals(-2, $b->getAmount());
//    }
//    public function testOne()
//    {
//        $this->assertTrue(FALSE);
//    }
//
//    /**
//     * @depends testOne
//     */
//    public function testTwo()
//    {
//    }
//    /**
//     * @depends testOne
//     * @depends tetTwo
//     */
//    public function testThree()
//    {
//    }
//    /**
//     * @dataProvider provider
//     */
//    public function testAdd( $a, $b, $c )
//    {
//        $this->assertEquals($c, $a + $b);
//    }
//    public function provider()
//    {
//        return array(
//            array(0, 0, 0),
//            array(0, 1, 1),
//            array(1, 0, 1),
//            array(1, 1, 3)
//        );
//    }
//    /**
//     * @expectedException InvalidArgumentException
//     */
//    public function testException()
//    {
//        throw new InvalidArgumentException();
//    }
//    /**
//     * @expectedException InvalidArgumentException
//     * @expectedExceptionMessage La barbara es molt sexy
//     */
//    public function testExceptionWithMessage()
//    {
//        throw new InvalidArgumentException('La barbara es molt sexy',20);
//    }
//    /**
//     * @expectedException InvalidArgumentException
//     * @expectedExceptionMessage La barbara es molt sexy
//     * @expectedExceptionCode 20
//     */
//    public function testExceptionWithMessageAndCode()
//    {
//        throw new InvalidArgumentException('La barbara es molt sexy',10);
//    }