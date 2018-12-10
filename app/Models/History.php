<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    private $table = 'history';

    private function boards()
    {
        return $this->hasOne(Boards::class, 'id', 'boardId');
    }

    protected $fillable = [
        'id',
        'date',
        'boardId',
        'newBugs',
    ];

}
