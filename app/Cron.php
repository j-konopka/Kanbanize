<?php
/**
 * Created by IntelliJ IDEA.
 * UserModel: ilyestascou
 * Date: 2018-12-18
 * Time: 12:33
 */

namespace App;


use App\Client\CallManager;
use App\Models\CronModel;
use App\Statistic\SettingsManager;
use App\Storing\Evaluation;


class Cron
{
    public function interativeCronStart()
    {
        $crons = CronModel::all();

        foreach ($crons as $cron)
        {
            $this->runCron($cron->api_key, $cron->statistic_id);
        }
    }

    public function runCron($auth, $statisticID)
    {
        // Methode anstoßen, CronModel-ID selektieren, Auth (ueber Benutzer) nehmen, Request anstoßen
        // Cron holt mittels hinterlegter Statistic ID die Statistic (spaeter iterativ)
        // TODO: Cron holt StatisticModel
        //$auth = env('KANBANIZE_KEY'); //muss spaeter durch DB->user->api_key ersetzt werden
        //$statisticID = 3;

        // ID der Statistic uebergeben
        //$this->insertTestData();
        $statisticSettings = SettingsManager::getSettingsTest($statisticID);

        $boardID = $statisticSettings['boardID'];
        $settings = $statisticSettings['settings'];




        $cm = new CallManager($auth);

        $tasks = $cm->getAllTasks($boardID);

        $results = Evaluation::applyFilters($tasks, $settings, 0);

        Evaluation::saveAsHistory($boardID, $statisticID, $results);


    }

    public function insertTestData()
    {
        $settings = [
            'open' => ['requested_633'],
            'doing' => ['progress_634_709', 'progress_634_710', 'progress_707', 'progress_708', 'progress_1860'],
            'done' => ['done_635'],
            'days' => 14,
        ];
        SettingsManager::saveSettingsTest($settings);
    }

    public function saveCronSettings()
    {
        /*$boardID = 50;
        $auth = env('KANBANIZE_KEY'); //muss spaeter durch DB->user->api_key ersetzt werden
        $settings = array(
            'open' => ['requested_633'],
            'doing' => ['progress_634_709', 'progress_634_710', 'progress_707', 'progress_708', 'progress_1860'],
            'done' => ['done_635'],
            'days' => 14,
        );

        $cron = new CronModel();
        $cron->date = Carbon::now();
        $cron->api_key = $auth;
        $cron->boardId = $boardID;
        $cron->settings = json_encode($settings);
        $cron->interval = 14;
        $cron->save();*/
    }

}
