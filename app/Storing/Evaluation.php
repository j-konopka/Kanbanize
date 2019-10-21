<?php
/**
 * Created by IntelliJ IDEA.
 * UserModel: ilyestascou
 * Date: 2018-12-18
 * Time: 12:21
 */

namespace App\Storing;

use App\Models\HistoryModel;
use Carbon\Carbon;


class Evaluation
{

    public static function applyFilters ($taskList, $settings, $days)
    {
        $open = Filter::filterForLanes($taskList, $settings['open']);
        $doing = Filter::filterForLanes($taskList, $settings['doing']);
        $done = Filter::filterForLanes($taskList, $settings['done']);


        $newBugs = 0;
        $newBugs += count(Filter::filterForDays($open, $days));
        $newBugs += count(Filter::filterForDays($doing, $days));
        $newBugs += count(Filter::filterForDays($done, $days));


        $results = [
            'open' => $open,
            'doing' => $doing,
            'done' => $done,
            'new' => $newBugs,
        ];

        return $results;
    }

    public static function saveAsHistory($boardID, $statisticsID, $results)
    {
        $history = new HistoryModel;

        $history->statistic_id = $statisticsID;
        $history->board_external_id = $boardID;
        $history->date = Carbon::now();
        $history->open = count($results['open']);
        $history->doing = count($results['doing']);
        $history->done = count($results['done']);
        $history->newBugs = $results['new'];

        $history->save();
    }
}

/*
        'statistic_id',
        'board_external_id',
        'date',
        'open',
        'doing',
        'done',
        'newBugs'
 */

// Backlog, Bug2Feature-Lane und Refactoring wird nicht mit gezaehlt
//'backlog_632_1858' && $task->getColumnID() != 'backlog_632_1859'
/*
 * {
    "columns": [
        {
            "position": "0",
            "lcname": "BUG TO Feature / Refactoring",
            "section": "backlog",
            "path": "backlog_632",
            "description": "",
            "lcid": "632",
            "flowtype": "not set",
            "children": [
                {
                    "position": "0",
                    "lcname": "BUG TO Feature",
                    "section": "backlog",
                    "path": "backlog_632_1858",
                    "description": "",
                    "lcid": "1858",
                    "flowtype": "activity",
                    "tasksperrow": 1
                },
                {
                    "position": "1",
                    "lcname": "Refactoring",
                    "section": "backlog",
                    "path": "backlog_632_1859",
                    "description": "",
                    "lcid": "1859",
                    "flowtype": "activity",
                    "tasksperrow": 1
                }
            ]
        },
        {
            "position": "0",
            "lcname": "OPEN",
            "section": "requested",
            "path": "requested_633",
            "description": "",
            "lcid": "633",
            "flowtype": "queue",
            "tasksperrow": 2
        },
        {
            "position": "0",
            "lcname": "In Progress",
            "section": "progress",
            "path": "progress_634",
            "description": "",
            "lcid": "634",
            "flowtype": "not set",
            "children": [
                {
                    "position": "0",
                    "lcname": "DOING",
                    "section": "progress",
                    "path": "progress_634_709",
                    "description": "",
                    "lcid": "709",
                    "flowtype": "activity",
                    "tasksperrow": 1
                },
                {
                    "position": "1",
                    "lcname": "Review",
                    "section": "progress",
                    "path": "progress_634_710",
                    "description": "",
                    "lcid": "710",
                    "flowtype": "activity",
                    "tasksperrow": 1
                }
            ]
        },
        {
            "position": "1",
            "lcname": "Rückfragen Kunde",
            "section": "progress",
            "path": "progress_707",
            "description": "",
            "lcid": "707",
            "flowtype": "activity",
            "tasksperrow": 1
        },
        {
            "position": "2",
            "lcname": "Rückfrage Intern",
            "section": "progress",
            "path": "progress_708",
            "description": "",
            "lcid": "708",
            "flowtype": "activity",
            "tasksperrow": 1
        },
        {
            "position": "3",
            "lcname": "Dokumentation",
            "section": "progress",
            "path": "progress_1860",
            "description": "",
            "lcid": "1860",
            "flowtype": "activity",
            "tasksperrow": 1
        },
        {
            "position": "0",
            "lcname": "Done",
            "section": "done",
            "path": "done_635",
            "description": "",
            "lcid": "635",
            "flowtype": "queue",
            "tasksperrow": 1
        },
        {
            "position": "0",
            "lcname": "Temp Archive",
            "section": "archive",
            "path": "archive_636",
            "description": "",
            "lcid": "636",
            "flowtype": "activity",
            "tasksperrow": 3
        }
    ],
    "lanes": [
        {
            "position": "0",
            "lcname": "Default Swimlane",
            "path": "lane_205",
            "description": "",
            "lcid": "205",
            "flowtype": "not set",
            "color": "#ffffff"
        }
    ]
}
 */
