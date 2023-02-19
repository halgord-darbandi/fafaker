<?php

namespace Fafaker\Providers\En;

use Fafaker\Providers\Contracts\Generatable;
use Fafaker\Providers\Contracts\GenerateTrait;

class FamilyProvider implements Generatable{

    use GenerateTrait;

    protected array $storage = [

    ];
}