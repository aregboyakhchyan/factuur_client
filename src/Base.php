<?php

namespace Factuur;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;

/**
 *
 */
class Base
{

    const API_URL = "https://www.invoicetest.be/api/v1";

    protected $client;
    protected $token;
    protected $tokensecret;
    protected $accesstoken;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client(['verify' => false ]);
    }

    public function setToken($token)
    {
        $this->token = $token;
    }

    protected function prepareHeader()
    {
        $header = array('token'=>$this->token, "Content-Type"=>"application/json;charset=UTF-8");
        return $header;
    }

    protected function callFactuurApi($method,$request,$post = [])
    {
        try{
            $url = self::API_URL . $request;
            $header = $this->prepareHeader();

            $response = $this->client->request($method,$url, array('query' => $post,'headers' => $header));
            return json_decode($response->getBody()->getContents());
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }
    protected function statusCodeHandling($e)
    {
        var_dump($e->getResponse());
        $response = array("statuscode" => $e->getResponse()->getStatusCode(),
                          "error" => json_decode($e->getResponse()->getBody(true)->getContents()));
        return $response;
    }
}