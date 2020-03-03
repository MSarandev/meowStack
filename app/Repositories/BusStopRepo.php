<?php

namespace App\Repositories;

use App\Models\BusStop;
use App\Models\GuzzleClient;
use Illuminate\Support\Collection;

class BusStopRepo
{
    private $model;
    private $guzzle;

    public function __construct(BusStop $busStop, GuzzleClient $guzzleClient)
    {
        $this->model = $busStop;
        $this->guzzle = $guzzleClient;
    }

    public function getAllBusStops()
    {
        // Get the data
        $data = $this->guzzle->callApi('GET', $this->model->getUrl());
        $data = str_replace("\n", ',', $data);
        $data = '[' . rtrim($data, ',') . ']';

        return json_decode(rtrim($data, ','), true);
    }
}