<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Http\Controllers\Controller;
use App\Http\Resources\CaseResource;
use App\Models\CovidCase;

class CaseController extends Controller
{
    /**
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return CaseResource::collection(
            CovidCase::all()
        );
    }
}
