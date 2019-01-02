<?php
/**
 * Created by IntelliJ IDEA.
 * UserModel: ilyestascou
 * Date: 2018-12-17
 * Time: 17:42
 */

namespace App\KanbanizeElements;


class Board
{
    private $boardID;

    /**
     * @return mixed
     */
    public function getBoardID()
    {
        return $this->boardID;
    }

    /**
     * @param mixed $boardID
     */
    public function setBoardID($boardID): void
    {
        $this->boardID = $boardID;
    }


}
