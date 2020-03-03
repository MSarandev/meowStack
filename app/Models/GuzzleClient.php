<?php

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class GuzzleClient extends Model
{
    /**
     * @param $method
     * @param $url
     * @return string
     */
    public function callApi($method, $url){
        $client = new Client();

        $response = $client->request($method, $url);

        return $response->getBody()->getContents();
    }
}
