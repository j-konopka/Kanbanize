<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    private $table = 'statistics';


    public $fillable = [
        'id',
        'boardId',
        'settings'
    ];

    public function boards()
    {
        return $this->hasOne(Boards::class, 'id', 'boardId');
    }
}
