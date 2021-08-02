<?php

namespace App\Observers;

use App\Models\CovidCase;

class CovidCaseObserver
{
    /**
     * Handle the CovidCase "created" event.
     *
     * @param  \App\Models\CovidCase  $covidCase
     * @return void
     */
    public function created(CovidCase $covidCase)
    {
        //
    }

    /**
     * Handle the CovidCase "updated" event.
     *
     * @param  \App\Models\CovidCase  $covidCase
     * @return void
     */
    public function updated(CovidCase $covidCase)
    {
        //
    }

    /**
     * Handle the CovidCase "deleted" event.
     *
     * @param  \App\Models\CovidCase  $covidCase
     * @return void
     */
    public function deleted(CovidCase $covidCase)
    {
        //
    }

    /**
     * Handle the CovidCase "restored" event.
     *
     * @param  \App\Models\CovidCase  $covidCase
     * @return void
     */
    public function restored(CovidCase $covidCase)
    {
        //
    }

    /**
     * Handle the CovidCase "force deleted" event.
     *
     * @param  \App\Models\CovidCase  $covidCase
     * @return void
     */
    public function forceDeleted(CovidCase $covidCase)
    {
        //
    }
}
