<?php


use App\controller\UserController;

require_once("./vendor/autoload.php");


    $userController = new UserController();

    var_dump(
        $userController->createUser()
    );


?>