<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boards extends Model
{
    private $table = 'boards';

    protected $fillable = [
        'id',
        'boardId',
        'boardName'
    ];
}
