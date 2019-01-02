<?php
/**
 * Created by IntelliJ IDEA.
 * UserModel: ilyestascou
 * Date: 2018-12-18
 * Time: 14:36
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class HistoryModel extends Model
{
    protected $table = 'history';

    protected $fillable = [
        'statistic_id',
        'board_external_id',
        'date',
        'open',
        'doing',
        'done',
        'newBugs'
    ];
}
    // statistic_id   == FK
    // board_id   == FK
