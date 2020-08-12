<?php

namespace codicastudio\responsecache\Hasher;

use Illuminate\Http\Request;
use codicastudio\responsecache\CacheProfiles\CacheProfile;

class DefaultHasher implements RequestHasher
{
    protected CacheProfile $cacheProfile;

    public function __construct(CacheProfile $cacheProfile)
    {
        $this->cacheProfile = $cacheProfile;
    }

    public function getHashFor(Request $request): string
    {
        return 'responsecache-'.md5(
            "{$request->getHost()}-{$request->getRequestUri()}-{$request->getMethod()}/".$this->cacheProfile->useCacheNameSuffix($request)
        );
    }
}
