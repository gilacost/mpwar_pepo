<?php
/**
 * Created by PhpStorm.
 * User: joseplluisgiraltdlacoste
 * Date: 13/02/14
 * Time: 21:30
 */

class UsersTest extends PHPUnit_Framework_TestCase
{
    private static $con;
    private $users;
/*
    public static function setUpBeforeClass ()
    {
        //$users = new Users();
        //self::$con = $users->setConnection ();
    }

    protected function setUp ()
    {
        $this->users = new Users();

        self::$con = $this->users->setConnection ();

    }

    protected function tearDown ()
    {
        self::$con->query ( "DELETE FROM user", MYSQLI_USE_RESULT );
        $_GET = array();
        //session_destroy();
    }
    public function testGetUserData ()
    {
        self::$con->query (
            "INSERT INTO user(id,user_name,password,num_actions,karma) VALUES (1,'pepo','12313123','5','jefe')",
            MYSQLI_USE_RESULT
        );

        $expected_result = array (
            'id' => "1",
            'user_name' => "pepo",
            'password' => "12313123",
            'num_actions' => "5",
            'karma' => "jee"
        );

        $obtained_result = $this->users->getUserData ( 1 );

        $this->assertEquals (
            $expected_result,
            $obtained_result
        );
    }

    public function testInsertUser ()
    {
        $this->users->insertUser( 'pepo', '123456' );
        $error = mysqli_error(self::$con);
        $this->assertTrue(empty($error));
    }

    public function testInsertUserAction ()
    {
        self::$con->query (
            "INSERT INTO user(id,num_actions) VALUES (1,'5')",
            MYSQLI_USE_RESULT
        );
          $this->users->insertUserAction( 5 , 1 );
          $error = mysqli_error(self::$con);
          $this->assertTrue(empty($error));
    }

    public function testGetUserActions ()
    {
        self::$con->query (
            "INSERT INTO user(id,num_actions) VALUES (1,'5')",
            MYSQLI_USE_RESULT
        );

        $actions = $this->users->getActions( 1 );

        $this->assertEquals (
            $actions,
            '5'
        );
    }

    public function testNewUserEmptyGet ()
    {
        $_GET['user_name'] ='';
        $_GET['password'] ='';
        $errors = $this->users->newUser();

        $this->assertFalse(empty($errors));
    }

    public function testNewUserGetWithPasswordAndUserName ()
    {
        $_GET['user_name'] ='Pene';
        $_GET['password'] ='12345';
        $errors = $this->users->newUser();

        $this->assertTrue(empty($errors));
    }
*/

}
