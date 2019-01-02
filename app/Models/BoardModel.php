<?php
/**
 * Created by IntelliJ IDEA.
 * UserModel: ilyestascou
 * Date: 2018-12-19
 * Time: 15:00
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class BoardModel extends Model
{
    protected $table = 'board';

    protected $fillable = [
        'external_id',
        'name'
    ];

}
