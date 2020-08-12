<?php

namespace codicastudio\responsecache\Facades;

use Illuminate\Support\Facades\Facade;

class ResponseCache extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'responsecache';
    }
}
