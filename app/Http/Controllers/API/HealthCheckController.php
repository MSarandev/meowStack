<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use RuntimeException;

class HealthCheckController extends BaseApiController
{
    /**
     * @return JsonResponse
     */
    public function status()
    {
        $dbConn = DB::connection()->getPdo();

        if (!isset($dbConn)) {
            throw new RuntimeException('Object is not instantiated');
        }

        return $this->returnSuccess('Status: OK');
    }
}