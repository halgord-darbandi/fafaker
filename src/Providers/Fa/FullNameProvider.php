<?php

namespace Fafaker\Providers\Fa;

use Fafaker\Providers\Contracts\Generatable;
use Fafaker\Providers\Contracts\GenerateTrait;
use Fafaker\Providers\Fa\FamilyProvider;
use Fafaker\Providers\Fa\NameProvider;

class FullNameProvider implements Generatable{

    use GenerateTrait;

    public static function generate(): mixed
    {
        return NameProvider::generate(). ' ' . FamilyProvider::generate();
    }
}