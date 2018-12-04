<?php
/**
 * Created by IntelliJ IDEA.
 * User: ilyestascou
 * Date: 30.11.18
 * Time: 11:07
 */

namespace App\DatabaseModels;


class Task
{
    private $id;
    private $assignee;
    private $title;
    private $columnid;
    private $laneid;
    private $createdat;
    private $updatedat;
    private $days;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAssignee()
    {
        return $this->assignee;
    }

    /**
     * @param mixed $assignee
     */
    public function setAssignee($assignee): void
    {
        $this->assignee = $assignee;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getColumnid()
    {
        return $this->columnid;
    }

    /**
     * @param mixed $columnid
     */
    public function setColumnid($columnid): void
    {
        $this->columnid = $columnid;
    }

    /**
     * @return mixed
     */
    public function getLaneid()
    {
        return $this->laneid;
    }

    /**
     * @param mixed $laneid
     */
    public function setLaneid($laneid): void
    {
        $this->laneid = $laneid;
    }

    /**
     * @return mixed
     */
    public function getCreatedat()
    {
        return $this->createdat;
    }

    /**
     * @param mixed $createdat
     */
    public function setCreatedat($createdat): void
    {
        $this->createdat = $createdat;
    }

    /**
     * @return mixed
     */
    public function getUpdatedat()
    {
        return $this->updatedat;
    }

    /**
     * @param mixed $updatedat
     */
    public function setUpdatedat($updatedat): void
    {
        $this->updatedat = $updatedat;
    }

    /**
     * @return mixed
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * @param mixed $days
     */
    public function setDays($days): void
    {
        $this->days = $days;
    }


}