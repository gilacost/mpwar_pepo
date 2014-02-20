<?php


namespace Development;


class UsersModelTest extends \PHPUnit_Framework_TestCase
{

    protected static $db;
    protected $users_model;

    public static function setUpBeforeClass ()
    {
        $db = new \PDO( "mysql:host=localhost;dbname=test", 'root', '' );

        $sql = "
        CREATE TABLE IF NOT EXISTS `users` (
    `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `activation_key` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";
        $db->exec ( $sql );

        self::$db = $db;

    }

    protected function setUp ()
    {
        $this->users_model = new UserModel( 'localhost', 'test', 'root', '' );
    }

    /**
     * @expectedException RuntimeException
     */

    public function testGetDatabaseConnection ()
    {
        $this->users_model->getDatabaseConnection ( 'asd','asd', 'asd', 'asd' );
    }

    public function testAddNewUser ()
    {
        $user_data = array (
            'user_name' => 'pepo',
            'email' => 'pepo@tester.com',
            'password' => 'easy',
            'activation_key' => 'asdasdasdasd'
        );

        $is_inserted = $this->users_model->addNewUser ( $user_data );

        $this->assertTrue(!empty($is_inserted));

    }
    /**
     * @depends testAddNewUser
     */
    public function testExistsUserName ()
    {

        $is_inserted = $this->users_model->existsUserName ( 'pepo' );

        $this->assertTrue(!empty($is_inserted));

    }

    public static function tearDownAfterClass ()
    {

        $sql = "DROP TABLE users";

        self::$db->exec ( $sql );
        self::$db = null;

    }
}
