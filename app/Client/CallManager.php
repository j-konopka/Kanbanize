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

    public function __construct($apikey)
    {
        $this->connector = new Connector($apikey);
    }

    public function getAllTasks (int $boardid)
    {
        $bodyRequest['boardid'] = $boardid;

        $response = $this->connector->requester(Calls::GET_ALL_TASKS, $bodyRequest);

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
        return null;
    }

    public function getAllBoards()
    {
        $response = $this->connector->requester(Calls::GET_ALL_PROJECTS_AND_BOARDS, array());

        if ($response->getStatusCode() == 200)
        {
            $data = json_decode($response->getBody());
            $boardList = [];

            foreach ($data as $dBoard)
            {
                $board = new Board(
                    $dBoard->id,
                    $dBoard->name
                );

                $boardList[] = $board;
            }
            return $boardList;
        }
        return null;
    }
}
