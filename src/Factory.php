<?php

namespace Fafaker;


class Factory
{

    public function __construct()
    {

    }

    public function __call(string $name , array $params):mixed
    {
        return $this->prepareClassName($name)::generate();
    }

    public function __get(string $name)
    {
        return $this->prepareClassName($name)::generate();
    }

    /*
     * preparing class provider class name
     */
    protected function prepareClassName(string $name): string
    {
        return 'Fafaker\Providers\\'. ucfirst($name) .'Provider';
    }
}