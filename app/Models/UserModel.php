<?php
/**
 * Created by IntelliJ IDEA.
 * UserModel: ilyestascou
 * Date: 2018-12-19
 * Time: 14:50
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'api_key',
    ];
}
