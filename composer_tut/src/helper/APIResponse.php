<?php

    namespace App\helper;

    class APIResponse{

        public static function JSON($message, $status = 200, $data = null){
            return json_encode(
                array(
                    "message" => $message,
                    "data" => $data
                )
            );

            header("http/1.0 $status");

        }

        public static function XML($message, $status = 200, $data = null){
            
        }
    }

?>