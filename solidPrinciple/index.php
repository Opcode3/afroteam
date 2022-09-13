S = Single Responsible Principle
O = Open/Closed Principle
L = Liskov Substitution Principle
I = Interface Segregation Principle
D = Dependency Injection Principle



<?php

    interface User{
        public function getProfile();
    }

    interface Mark{
        public function addMark();
    }

    class Student implements User{

        public function getProfile(){
            // do nothing
        }
    }

    class Comrade implements User, Mark{
        public function getProfile(){
            // do nothing
        }

        public function addMark(){
            
        }
    }


?>



