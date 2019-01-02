<?php
/**
 * Created by IntelliJ IDEA.
 * UserModel: ilyestascou
 * Date: 28.11.18
 * Time: 14:38
 */

namespace App\Client;


use GuzzleHttp\Client;

class Connector
{
    private const URL = 'https://plentymarkets.kanbanize.com/index.php/api/kanbanize/';

    private $auth;

    public function __construct($auth)
    {
        $this->auth = $auth;
    }

    public function requester ($endpoint, $bodyRequest)
    {
        $client = new Client();

        //$bodyRequest = array('boardid' => 50);

        $request = $client->request('POST', self::URL . $endpoint . '/format/json/',
            [
                'headers' => [
                    'apikey' => $this->auth,
                    'content-type' => 'application/json'
                ],
                'json' => [
                    'boardid' => '50'
                ]
        ]);



        return $request;

        // Board 50
        // "Open"-Lane 633
        // "In Prog"-Lane 634
        // "Done"-Lane 640
    }









}
