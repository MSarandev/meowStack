<?php

namespace App\Http\Controllers\API;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;

class BaseApiController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param $data
     * @return JsonResponse
     */
    public function returnSuccess($data)
    {
        $returnObject = $this->buildResponseObject(200, 'OK', 'OK', $data);

        return new JsonResponse($returnObject);
    }

    /**
     * @param $data
     * @param $errorBag
     * @return JsonResponse
     */
    public function returnServerError($data, $errorBag)
    {
        $returnObject = $this->buildResponseObject(
            500,
            'Error',
            'Internal Server Error',
            $data,
            $errorBag);

        return new JsonResponse($returnObject);
    }

    /**
     * @param $statusCode
     * @param $statusMessage
     * @param $hMessage
     * @param $data
     * @param null $errorBag
     * @return array
     */
    private function buildResponseObject($statusCode, $statusMessage, $hMessage, $data, $errorBag = null)
    {
        $obj = [
            'code' => $statusCode,
            'status' => $statusMessage,
            'message' => $hMessage,
            'data' => $data
        ];

        if ($errorBag) {
            $obj['errors'] = $errorBag;
        }

        return $obj;
    }
}
