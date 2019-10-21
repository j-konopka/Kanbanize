<?php
/**
 * Created by IntelliJ IDEA.
 * UserModel: ilyestascou
 * Date: 2018-12-18
 * Time: 12:37
 */

namespace App\Storing;



class Filter
{
    public static function filterForDays($taskList, $days)
    {
        $filtered = [];
        foreach ($taskList as $task) {
            if ($task->getDays() <= $days) {
                $filtered[] = $task;
            }
        }

        return $filtered;
    }

    public static function filterForLanes($taskList, $laneIDList)
    {
        $filtered = [];
        foreach ($taskList as $task) {
            foreach ($laneIDList as $laneID) {
                if ($task->getColumnID() == $laneID) {
                    $filtered[] = $task;
                }
            }
        }

        return $filtered;
    }
}
