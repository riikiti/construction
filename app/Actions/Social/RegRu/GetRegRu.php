<?php

namespace App\Actions\Social\RegRu;

use App\Actions\Social\GetInfoInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

abstract class GetRegRu implements GetInfoInterface
{
    public Client $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('app.regRuApi'),
            'headers' => [
                'Authorization' => 'Bearer ' . config('app.regRuApiKey'),
            ],
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function getObject(string $method)
    {
        $response = $this->client->request(
            'GET', $method,
        );
        return json_decode($response->getBody()->getContents());
    }

}