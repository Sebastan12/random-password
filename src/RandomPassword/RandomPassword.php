<?php

namespace RandomPassword;

class RandomPassword{

    public function getRandomPassword($length = 8, $allow_special_chars=true){
        if($length < 1){
            $length = 1;
        }
        $charset = "";
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '1234567890';
        $special_chars = '*!?_-';

        $charset = $charset.$alphabet;
        $charset = $charset.$numbers;

        if($allow_special_chars){
            $charset = $charset.$special_chars;
        }
        $password = array(); //remember to declare $pass as an array
        $charsetLength = strlen($charset) - 1; //put the length -1 in cache
        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $charsetLength);
            $password[] = $charset[$n];
        }
        return implode($password);
    }
}