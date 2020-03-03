<?php

namespace App\Http\Controllers;

use App\Services\MainService;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class MainController extends Controller
{
    private $service;

    public function __construct(MainService $mainService)
    {
        $this->service = $mainService;
    }

    /**
     * @return Factory|View
     */
    public function returnMainView()
    {
        // Get the data
        $data = $this->service->getAllBusStops();

        return view('main', ['data' => $data]);
    }

}