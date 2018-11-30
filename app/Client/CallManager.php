<?php
/**
 * Created by IntelliJ IDEA.
 * User: ilyestascou
 * Date: 30.11.18
 * Time: 10:39
 */

namespace App\Client;


use App\DatabaseModels\Task;

class CallManager
{
    private $connector;

    public function getAllTasks (int $boardid)
    {
        $this->connector = new Connector('ubI24uKusVLCtsLPYdrzFi3ahYHN3TQTk7IVBLzl');

        $response = $this->connector->requester(Calls::GET_ALL_TASKS, $boardid);

        if ($response->getStatusCode() == 200)
        {
            $data = json_decode($response->getBody());
            $taskList = [];

            foreach ($data as $dTask)
            {
                $t = new Task();

                $t->setId($dTask->taskid);
                $t->setAssignee($dTask->assignee);
                $t->setTitle($dTask->title);
                $t->setColumnid($dTask->columnid);
                $t->setLaneid($dTask->laneid);
                $t->setCreatedat($dTask->createdat);
                $t->setUpdatedat($dTask->updatedat);
                $t->setDays($dTask->leadtime);

                $taskList[] = $t;
            }
            return $taskList;
        }

    }
}
