<?php

namespace Fafaker\Providers\En;

use Fafaker\Providers\Contracts\Generatable;
use Fafaker\Providers\Contracts\GenerateTrait;

class NameProvider implements Generatable
{

    use GenerateTrait;

    /*
     * database of provider
    */
    protected static array $storage = [
        'male' => []
        ,
        'female' => []
    ];
}