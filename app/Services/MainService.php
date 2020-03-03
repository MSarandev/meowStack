<?php

namespace App\Services;

use App\Repositories\BusStopRepo;

class MainService
{
    private $busStopRepo;

    public function __construct(BusStopRepo $busStopRepo)
    {
        $this->busStopRepo = $busStopRepo;
    }

    public function getAllBusStops()
    {
        return $this->busStopRepo->getAllBusStops();
    }
}