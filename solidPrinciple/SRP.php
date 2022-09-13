<?php
    // The single responsibility principle talks about the implementation of an object to have the ability to do one thing and also have just a reason to change.

    // A typical example of such a class is an Entity class or a schema class or a payload class, a repository class. We should also have in mind that every class must have many functionalities it is bound to do.

    // An object usuall have a state and behaviour. Some of this behaviour are enormous; and it doesn't mean such object need to be broken down into chokes of objects..

    // A typical example wil be with a persistent class##

    interface ModalHandler{

    }

    // name, age, gender and password

    // POST: user_id, title, desc

    class UserPostRepository{
        
        function getPostCountByUser(int $user_id): int{
            return 0;
        }
    }

    class UserRepository{ 
        // it can also implement some kind of interface or even extend a class
        private ModalHandler $connectString;

        public function create(){
            // create a user implementation
        }

        public function update(int $id, array $user_updating_data){
            // implementation should be done here
        }

        public function findUserById(int $id){
            // implementation should be done here
        }

        public function deleteUserById(int $id): void{
            // implementation should be done here
        }

        public function findAll(): array{
            // implementation should be done here
            return [];
        }

        


        // adding the below class will be a violation of the single responsibility principle

        public function findAllBooksByUser(int $id){

        }


        // or sending user a welcome email address

        private function sendEmail(string $email_address):bool{
            // email implementation should be done here
            return true;
        }
    }

?>