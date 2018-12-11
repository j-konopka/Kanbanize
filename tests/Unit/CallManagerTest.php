<?php
/**
 * Created by IntelliJ IDEA.
 * User: ilyestascou
 * Date: 30.11.18
 * Time: 11:56
 */

namespace Tests\Unit;


use App\Client\CallManager;
use App\DatabaseModels\Task;
use Tests\TestCase;

class CallManagerTest extends TestCase
{

    public function testGetAllTasks()
    {
        $callMngr = new CallManager(env('KANBANIZE_KEY'));

        $boardid = 50;
        $tasks[] = $callMngr->getAllTasks($boardid);

        $this->assertNotNull($tasks);
        // TODO: Checken, ob Tasks vorhanden sind
    }

}
