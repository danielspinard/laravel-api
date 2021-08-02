<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use App\Models\CovidCase;

class CaseController extends Controller
{
    /**
     * @return EloquentCollection
     */
    public function index(): EloquentCollection
    {
        return CovidCase::all();
    }
}
