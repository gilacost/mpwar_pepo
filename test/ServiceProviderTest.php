<?php


namespace Development;


class ServiceProviderTest extends \PHPUnit_Framework_TestCase
{

    protected static $service_provider;

    public static function setUpBeforeClass()
    {
        self::$service_provider = new ServiceProvider();
    }

    public function testGetInstance()
    {

        $service_provider_mock = $this->getMock('Development\ServiceProvider');

        // Configure the stub.
        $service_provider_mock->expects($this->any())
            ->method('getInstance')
            ->will($this->returnSelf());

        $service_provider_mock->getInstance();

        $this->assertTrue(true);

    }

    public function testSetService( )
    {
         self::$service_provider->setService('\Development\UserModel');
    }
    /**
     * @depends     testSetService
     */
    public function testGetServiceSet( )
    {
       $object_name = self::$service_provider->getService('\Development\UserModel');
       $this->assertEquals(get_class($object_name) , 'Development\UserModel');
    }

    /**
     * @expectedException     RuntimeException
     */
    public function testGetServiceNotSet( )
    {

        self::$service_provider->getService('\Development\UserModels');
    }
}
