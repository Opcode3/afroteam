<?php

namespace App\modal;

class UserModal{

    public function create(array $user_info){
        return $user_info[0];
    }
}

?>