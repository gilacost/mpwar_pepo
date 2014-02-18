<?php

class Users
{
    private $errors = array();
    private $con = null;

    public function __construct()
    {
        session_start();
    }

    public function newUser()
    {
        if ( !empty( $_GET['user_name'] ) && !empty( $_GET['password'] ) )
        {
            $this->insertUser( $_GET['user_name'], $_GET['password'] );
        }
        else
        {
            if ( empty( $_GET['user_name'] ) )
            {
                $this->errors[] = 'Invalid User name';
            }

            if ( empty( $_GET['password'] ) )
            {
                $this->errors[] = 'Invalid Password';
            }
        }
        return $this->errors;
    }

    /**
     * Retorna la información de un usuario guardado en la base de datos. Si no existe lanza una excepción.
     * @param $id_user
     */
    public function getUserData( $id_user )
    {
        $result = $this->con->query("SELECT * FROM user WHERE id='$id_user'", MYSQLI_USE_RESULT);

        $row = mysqli_fetch_assoc($result);

        return $row;
    }

    /**
     * Inserta un usuario en la base de datos.
     * @param $name
     * @param $password
     */
    public function insertUser( $name, $password )
    {
        $this->con->query (
            "INSERT INTO user(user_name,password) VALUES ('$name','$password')",
            MYSQLI_USE_RESULT
        );
    }

    /**
     * Inserta una acción en base de datos.
     * @param $action
     */
    public function insertUserAction( $num_actions  , $user_id)
    {
        $this->con->query (
            "UPDATE user SET num_actions='$num_actions' WHERE id='$user_id'",
            MYSQLI_USE_RESULT
        );
    }

    /**
     * Retorna un array de acciones. Si el usuario no tiene acciones retorna vacío.
     * @param $action
     */
    public function getActions( $id_user )
    {
        $result = $this->con->query("SELECT num_actions FROM user WHERE id='$id_user'", MYSQLI_USE_RESULT);

        $row = mysqli_fetch_assoc($result);

        return $row['num_actions'];
    }

    /**
     * Nos devuelve el karma del usuario en función del número de acciones realizadas.
     * - Entre 0 y 10 -> devuelve 1
     * - Mayor que 10 y menor 100 -> devuelve 2
     * - Mayor de 100 y menor de 500 -> devuelve 3
     * - Mayor de 500 -> devuelve número de acciones entre 100
     * @param $id_user
     */
    public function getUserKarma( $id_user )
    {
        $result = $this->con->query("SELECT num_actions FROM user WHERE id='$id_user'", MYSQLI_USE_RESULT);

        $row = mysqli_fetch_assoc($result);

        return $row['karma'];

    }

    public function setConnection()
    {
        $this->con = mysqli_connect("localhost","root","","test");

        return $this->con;
    }
}

