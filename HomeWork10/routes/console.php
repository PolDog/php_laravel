<?php

use App\Jobs\ClearCache;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::job(ClearCache::class)->hourly();
// Schedule::job(ClearCache::class)->everyMinute();
