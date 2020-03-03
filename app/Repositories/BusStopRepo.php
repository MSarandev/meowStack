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
        $returnStack = [];
        $formattedReturn = [];

        // Get the data
        for ($i = 0; $i<100; $i+=10) {
            $this->model->setUrl(env('API_PATH') . '/stops?weight=' . $i);

            $data = $this->guzzle->callApi('GET', $this->model->getUrl());

            $data = str_replace("\n", ',', $data);

            $returnStack[] = '[' . rtrim($data, ',') . ']';
        }

        foreach ($returnStack as $item) {
            $formattedReturn += json_decode(rtrim($item, ','), true);
        }

        return $formattedReturn;
    }
}