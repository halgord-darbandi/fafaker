<?php

namespace Fafaker\Providers\Contracts;

trait GenerateTrait{

    /*
     * return generated data
     */
    public static function generate():mixed
    {
        return ucfirst(self::getFromStorage());
    }


    /*
     * randomly return data from providers storages;
     */
    public static function getFromStorage(){
        if (self::isAssocArray(self::$storage)){
            return self::$storage[array_rand(self::$storage)][rand(0,sizeof(self::$storage[array_rand(self::$storage)]))];
        }
        return self::$storage[array_rand(self::$storage)];
    }

    /*
     * checks is array is associative
    */
    public static function isAssocArray($array):bool{
        return (is_string(array_key_first($array)) && array_key_first($array) !== 0);
    }
}