<?php

namespace App\controller;

use App\helper\APIResponse;
use App\modal\UserModal;

class UserController{


    private $userModal = null;

    function __construct()
    {
        $this->userModal = new UserModal();
    }


    public function createUser(){
        $userData = array("Kelin", "Emeka", 20);
        $reponse = $this->userModal->create($userData);
        return APIResponse::JSON("user is created!", 201, $reponse);
    }

    public function getUserBySlug(string $slug){

    }
}

?>