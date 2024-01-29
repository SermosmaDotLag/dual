<?php

namespace App\Http\Controllers;

use App\Models\ApiModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\EndpointModel;

class PokeApiController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    private $limit;
    private $offset;
    private $baseUrl;
    private $idEndpoint;
    public function __construct($limit = null, $offset = null, $idEndpoint = null) {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->idEndpoint = $idEndpoint;
    }



    public function getLimit() {
        return $this->limit;
    }
    public function setLimit($limit) {
        $this->limit = $limit;
    }

    public function getidEndpoint() {
        return $this->idEndpoint;
    }
    public function setidEndpoint($idEndpoint) {
        $this->idEndpoint = $idEndpoint;
    }

    public function getbaseUrl() {
        return $this->baseUrl;
    }
    public function setbaseUrl($baseUrl) {
        $this->baseUrl = $baseUrl;
    }

    public function getOffset() {
        return $this->offset;
    }
    public function setOffset($offset) {
        $this->offset = $offset;
    }



    public function show(){
        $poke = ApiModel::show();

        return view('pokeview-content')
            ->with('poke', $poke);
    }

    private function getUrl(){

        $params = [
            'limit' => $this->limit,
            'offset' => $this->offset,
        ];

        $endpoint = EndpointModel::getUrl($this->idEndpoint);
        $this->setBaseUrl($endpoint->url);


        $query = http_build_query(array_filter($params));
        return  $this->getBaseUrl() . ($query ? '?' . $query : ''); //mover endpoint a atributo

    }

    private function fetchData()
    {

        $baseUrl = $this->getUrl();
        $continue = true;
        $apiDataToInsert = [];
 
        while ($continue) {
            $api = new CurlController();

            $data = $api->fetchData($baseUrl);

            if (isset($data['results']) && is_array($data['results'])) {
                foreach ($data['results'] as $result) {
                    $apiDataToInsert[] = [
                        'pokeName' => $result['name'],
                        'url' => $result['url'],
                    ];
                }
            }

            if (isset($data['next']) && $data['next']) {
                $baseUrl = $data['next'];
            } else {
                $continue = false;
            }
        }

        return $apiDataToInsert;

        
    }

    public function insertData(){
        $api = new self();
        $api->setidEndpoint(1);//cambiar esto a un setter y getter
        $api->setLimit(20);
        $api->setOffset(0);
        $data = $api->fetchData();
        ApiModel::upload($data);

        return back();
    }
}
