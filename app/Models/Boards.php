<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boards extends Model
{
    private $table = 'boards';

    public $fillable = [
        'id',
        'boardId',
        'boardName'
    ];
}
