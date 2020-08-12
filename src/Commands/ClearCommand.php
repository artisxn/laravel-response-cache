<?php

namespace codicastudio\responsecache\Commands;

use Illuminate\Console\Command;
use codicastudio\responsecache\Events\ClearedResponseCache;
use codicastudio\responsecache\Events\ClearingResponseCache;
use codicastudio\responsecache\ResponseCacheRepository;

class ClearCommand extends Command
{
    protected $signature = 'responsecache:clear';

    protected $description = 'Clear the response cache';

    public function handle(ResponseCacheRepository $cache)
    {
        event(new ClearingResponseCache());

        $cache->clear();

        event(new ClearedResponseCache());

        $this->info('Response cache cleared!');
    }
}
