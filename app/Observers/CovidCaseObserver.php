<?php

namespace App\Observers;

use Illuminate\Support\Facades\Cache;
use App\Models\CovidCase;

class CovidCaseObserver
{
    /**
     * @param CovidCase $covidCase
     * @return void
     */
    public function created(CovidCase $covidCase): void
    {
        Cache::forget('cases');
    }
}
