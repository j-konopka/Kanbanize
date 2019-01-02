<?php
/**
 * Created by IntelliJ IDEA.
 * UserModel: ilyestascou
 * Date: 28.11.18
 * Time: 15:21
 */

namespace App\Client;


use App\KanbanizeElements\Task;

class CallManager
{

    private $connector;

    public function __construct($apikey)
    {
        $this->connector = new Connector($apikey);
    }

    public function getAllTasks (int $boardID)
    {
        $bodyRequest['boardid'] = $boardID;
        $response = $this->connector->requester(Calls::GET_ALL_TASKS, $bodyRequest);

        if ($response->getStatusCode() == 200)
        {
            $data = json_decode($response->getBody());
            $taskList = [];

            foreach ($data as $dTask)
            {
                $tmpTask = new Task();

                $tmpTask->setBoardID($dTask->boardparent);

                $tmpTask->setColumnID($dTask->columnid);
                $tmpTask->setColumnName($dTask->columnname);

                $tmpTask->setId($dTask->taskid);
                $tmpTask->setAssignee($dTask->assignee);
                $tmpTask->setTitle($dTask->title);
                $tmpTask->setLaneid($dTask->laneid);
                $tmpTask->setCreatedat($dTask->createdat);
                $tmpTask->setUpdatedat($dTask->updatedat);
                $tmpTask->setDays($dTask->leadtime);

                $taskList[] = $tmpTask;
            }
           // dd($this->taskFilterTime($taskList));
            return $taskList;
        }

    }

    /*public function taskFilterTime ($taskList)
    {
        $filtered = [];
        foreach ($taskList as $task)
        {
            if ($task->getDays() <= 14)
            {
                // Backlog, Bug2Feature-Lane und Refactoring wird nicht mit gezaehlt
                if ($task->getColumnID() != 'backlog_632_1858' && $task->getColumnID() != 'backlog_632_1859')
                {
                    $filtered[] = $task;
                }
            }
        }

        return $filtered;
    }*/


}
