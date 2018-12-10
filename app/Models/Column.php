<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Column extends Model
{
    private $table = 'column';

    private function boards()
    {
        return $this->hasOne(Boards::class, 'id', 'boardId');
    }

    protected $fillable = [
        'id',
        'nameIntern',
        'columnName',
        'boardId',
    ];
}
