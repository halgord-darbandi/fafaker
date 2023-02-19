<?php

namespace Fafaker\Providers\Contracts;

interface Generatable {
    public static function generate():mixed;
}