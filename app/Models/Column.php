<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Column extends Model
{
    private $table = 'column';

    public $fillable = [
        'id',
        'nameIntern',
        'columnName',
        'boardId',
        'amount'
    ];

    public function boards()
    {
        return $this->hasOne(Boards::class, 'id', 'boardId');
    }
}
