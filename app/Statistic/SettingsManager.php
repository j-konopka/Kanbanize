<?php
/**
 * Created by IntelliJ IDEA.
 * UserModel: ilyestascou
 * Date: 2018-12-19
 * Time: 15:04
 */

namespace App\Statistic;


use App\Models\CronModel;
use App\Models\StatisticModel;
use Carbon\Carbon;

class SettingsManager
{
    // ONLY FOR STATISTICS


    public static function saveSettingsTest ($settings)
    {
        $statistic = new StatisticModel();

        $statistic->board_external_id = 50;
        $statistic->settings = serialize($settings);
        $statistic->save();
    }

    public static function getSettingsTest ($id)
    {
        $statistic = StatisticModel::find($id);

        $settings = array(
            'boardID' => $statistic->board_external_id,
            'settings' => unserialize($statistic->settings)
        );

        return $settings;
    }


}
