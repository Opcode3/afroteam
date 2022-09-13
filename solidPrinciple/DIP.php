<?php
    // Dependency Injection talks about loose coupling.
    // its a method that enable the use of different dependant class while object is been initialized.



    // a typical example will be

    interface DataBaseHandler{
        public function connection();
    }

    class MysqlHandler implements DataBaseHandler{
        public function connection(){
            return "The connection String";
        }
    }

    class MongoHandler implements DataBaseHandler{
        public function connection(){
            return "The connection String";
        }
    }

    class CassandraHandler implements DataBaseHandler{
        public function connection(){
            return "The connection String";
        }
    }


    // to actually use this in the implementation; we say

    class UserRepository{ // can also extend other classes
        
        private $databaseHandler = null;

        function __construct(DataBaseHandler $dataBaseHandler)
        {
            $this->databaseHandler = $dataBaseHandler->connection();

        }
    }

    class NewsLetterController{

        
        private $mailService = null;

        function __construct()
        {
            $this->mailService = new PHPMailer();

        }

        function sendMail(){
            return $this->mailService->push();
        }
    }

    


?>