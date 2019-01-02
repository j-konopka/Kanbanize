<?php
/**
 * Created by IntelliJ IDEA.
 * UserModel: ilyestascou
 * Date: 2018-12-19
 * Time: 15:00
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class StatisticModel extends Model
{
    protected $table = 'statistic';

    protected $fillable = [
        'board_external_id',
        'settings',
    ];
    // board_id  == FK
}
