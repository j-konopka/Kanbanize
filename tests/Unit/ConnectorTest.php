<?php
/**
 * Created by IntelliJ IDEA.
 * User: ilyestascou
 * Date: 30.11.18
 * Time: 11:28
 */

namespace Tests\Unit;


use App\Client\Connector;
use Tests\TestCase;

class ConnectorTest extends TestCase
{

    public function testConnection()
    {
        $connector = new Connector(env('KANBANIZE_KEY'));

        $response = $connector->requester('get_all_tasks', 50);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody());
    }
}
