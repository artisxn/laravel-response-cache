<?php

namespace codicastudio\responsecache\Events;

use Illuminate\Http\Request;

class ResponseCacheHit
{
    public Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}
