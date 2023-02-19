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
        return self::$storage[array_rand(self::$storage)];
    }
}