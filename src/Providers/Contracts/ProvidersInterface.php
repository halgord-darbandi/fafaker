<?php

namespace Fafaker\Providers\Contracts;

interface ProvidersInterface {
    public static function generate():mixed;
}