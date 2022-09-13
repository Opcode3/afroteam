<?php

    // The Liskov Substitution principle talks about a smoothe change if the base class implementation is to be changed with a childs class

    // a typical example will be:

    interface DBHandler{
        public function connect();
    }

    class MysqlDBHandler implements DBHandler{
        public function connect(){}
    }

    class MongoDBHandler implements DBHandler{
        public function connect(){}
    }

    class PgHandler implements DBHandler{
        public function connect(){}
    }


    class User{

        private $connection = null;

        function __construct(DBHandler $db){
            $this->connection = $db->connect();
        }

        public function getAllUser(){
            $sql = "";

            $this->connection->prepare($sql);
        }
    }


    class UserController{
        
        function __construct()
        {
            $userModal = new User(new MongoDBHandler());

            
        }
    }




    interface Engine{
        public function on();
    }

    interface Car{
        public function turnOnEngine();
        public function speedUp();
    }

    class MotorCar implements Car{

        private Engine $engine;
        
        public function turnOnEngine(){
            $this->engine->on();
        }
        public function speedUp(){}
    }

    class ElectricCar implements Car{

        private Engine $engine;
        
        public function turnOnEngine(){
            $this->engine->on();
        }
        public function speedUp(){}
    }

    // This two implementation can be used when an instantiation is done for car object.

    // Car car = new MotorCar();
    // Car car = new ElectricCar();


?>