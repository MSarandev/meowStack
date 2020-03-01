<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class MainController extends Controller
{

    /**
     * @return Factory|View
     */
    public function returnMainView()
    {
        return view('main');
    }

}