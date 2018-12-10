<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    private $table = 'statistics';

    private function boards()
    {
        return $this->hasOne(Boards::class, 'id', 'boardId');
    }

    protected $fillable = [
        'id',
        'boardId',
        'settings',
    ];

}
