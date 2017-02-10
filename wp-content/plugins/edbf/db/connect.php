<?php

/**
 * Created by PhpStorm.
 * User: Feri
 * Date: 20/01/2017
 * Time: 22:01
 */


class Connect
{

    protected $host;
    protected $dbname;
    protected $user;
    protected $pass;
    protected $config;
    private $connection;


    function __construct()
    {
        $this->config = new Config();
        $this->host = $this->config->getHost();
        $this->db_name = $this->config->getDbName();
        $this->user = $this->config->getUser();
        $this->pass = $this->config->getPass();

    }


    public function connect()
    {

// Create connection
        $conn = new mysqli($this->host, $this->user, $this->pass);

// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;





    }






}

