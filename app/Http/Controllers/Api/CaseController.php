<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Cache;
use App\Http\Resources\CaseResource;
use App\Models\CovidCase;

class CaseController extends Controller
{
    /**
     * @const int
     */
    private const TTL_IN_SECONDS = 3600;

    /**
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        $cases = Cache::remember('cases', CaseController::TTL_IN_SECONDS, function () {
            return CovidCase::all();
        });
        
        return CaseResource::collection($cases);
    }
}
