<?php
/**
 * Created by IntelliJ IDEA.
 * User: ilyestascou
 * Date: 30.11.18
 * Time: 10:27
 */

namespace App\Client;


use GuzzleHttp\Client;

class Connector
{
    private const URL = 'https://plentymarkets.kanbanize.com/index.php/api/kanbanize/';

    private $auth;


    public function __construct(string $key)
    {
        $this->auth = $key;
    }

    public function requester (string $endpoint, string $boardid)
    {
        $client = new Client();

        $request = $client->request('POST', self::URL . $endpoint . '/format/json/',
            [
                'headers' => [
                    'apikey' => $this->auth,
                    'content-type' => 'application/json'
                ],
                // TODO: Json als Array ersetzen um Dynamik reinzubringen
                'json' => [
                    'boardid' => $boardid
                ]
            ]);

        return $request;
    }
}
