<?php
// The open and closed principle talks about the design of an object to easily provide a mechanism (open) for adding new functionalities; also making it not possible (closed) for changing the code.

// A typical example will be the below

// this implementation was shipped
class UserController{

    public function getAllUsers(){

    }

    public function getPaidUsers(){
        
    }


    

    
}

// Now the manager now ask for us to ass a functionality that should be able to print out the users that are yet to pay their bill. We should be able to add this functionality without modifying the shipped code structure..

// to achieve the Open and Closed principle; we use either abstraction or interfacing methods.

class UserModifiedController extends UserController{
    // the userController is used as an abstract class.

    public function getAllUnpaidUsers(){
        // implementation should be here
    }
}



// such that we can now inject the UserModifiedController class where ever the base class exit. and this implementation will cause us no alarm or need to worry... 

// the beest way to do this is to use interfaces to implements all of the classes.




?>