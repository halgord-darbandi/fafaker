<?php

namespace Fafaker;


class Factory
{
    /*
     * determine providers language
     * */
    protected string $lang;

    public function __construct($lang = 'fa')
    {
        $this->lang = ucfirst($lang);
    }

    /*
     * determine providers language
    * */
    public function lang($lang = 'fa'): void
    {
        $this->lang = ucfirst($lang);
    }

    public function __call(string $name, array $params): mixed
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
        return 'Fafaker\Providers\\'.$this->lang.'\\' . ucfirst($name) . 'Provider';
    }
}