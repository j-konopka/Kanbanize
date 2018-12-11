<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    private $table = 'history';

    public $fillable = [
        'id',
        'date',
        'boardId',
        'newBugs'
    ];


    public function boards()
    {
        return $this->hasOne(Boards::class, 'id', 'boardId');
    }


}
