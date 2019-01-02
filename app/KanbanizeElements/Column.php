<?php
/**
 * Created by IntelliJ IDEA.
 * UserModel: ilyestascou
 * Date: 2018-12-17
 * Time: 17:37
 */

namespace App\KanbanizeElements;


class Column extends Board
{
    private $columnID;
    private $columnName;

    /**
     * @return mixed
     */
    public function getColumnID()
    {
        return $this->columnID;
    }

    /**
     * @param mixed $columnID
     */
    public function setColumnID($columnID): void
    {
        $this->columnID = $columnID;
    }

    /**
     * @return mixed
     */
    public function getColumnName()
    {
        return $this->columnName;
    }

    /**
     * @param mixed $columnName
     */
    public function setColumnName($columnName): void
    {
        $this->columnName = $columnName;
    }




}
