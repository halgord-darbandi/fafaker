<?php

namespace Fafaker\Providers\En;

use Fafaker\Providers\Contracts\Generatable;
use Fafaker\Providers\Contracts\GenerateTrait;
use Fafaker\Providers\En\FamilyProvider;
use Fafaker\Providers\En\NameProvider;

class FullNameProvider implements Generatable{

    use GenerateTrait;

    public static function generate(): mixed
    {
        return NameProvider::generate(). ' ' . FamilyProvider::generate();
    }
}