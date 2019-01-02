<?php
/**
 * Created by IntelliJ IDEA.
 * UserModel: ilyestascou
 * Date: 2018-12-19
 * Time: 15:00
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CronModel extends Model
{
    protected $table = 'cron';

    protected $fillable = [
        'date',
        'api_key',
        'statistic_ID',
    ];
}
// statistic_id  ==  FK
