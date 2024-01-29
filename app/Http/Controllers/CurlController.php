<?php

namespace App\Http\Controllers;

class CurlController extends Controller
{
    public function fetchData($baseUrl, $limit = 20, $offset = 0)
    {

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $baseUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_FAILONERROR => true,
        ]);

        $curlResponse['message'] = curl_exec($curl);
        $curlResponse['status'] = curl_getinfo($curl);
        $curlResponse['errors'] = curl_error($curl);
        curl_close($curl);

        $apiData = json_decode($curlResponse['message'], true);
        return $apiData;
    }
}
