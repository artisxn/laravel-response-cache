<?php

namespace codicastudio\responsecache\Hasher;

use Illuminate\Http\Request;

interface RequestHasher
{
    public function getHashFor(Request $request): string;
}
