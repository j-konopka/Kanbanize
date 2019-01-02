<?php
/**
 * Created by IntelliJ IDEA.
 * UserModel: ilyestascou
 * Date: 28.11.18
 * Time: 17:20
 */

namespace App\KanbanizeElements;


class Task extends Column
{
    private $id;
    private $assignee;
    private $title;
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



/*    public function dateToDays ($date): void
    {
        // Format: 2018-04-24 16:31:38
        $startDate = Carbon::parse($date);
        $now = Carbon::now();
        $this->days = $startDate->diffInDays($now);
    }*/



/*
 * <item>
        <taskid>4121</taskid>
        <position>0</position>
        <type>None</type>
        <assignee>christophertohme</assignee>
        <title>Fremdwährung auf Rechnung - unterschiedliche Beträge in Artikelposition und Summen</title>
        <description/>
        <subtasks>0</subtasks>
        <subtaskscomplete>0</subtaskscomplete>
        <color>#cc1a33</color>
        <priority>High</priority>
        <size/>
        <deadline/>
        <deadlineoriginalformat/>
        <extlink>forum.plentymarkets.com/t/unterschiedliche-betraege-auf-rechnungs-beleg-bei-fremdwaehrung/332243</extlink>
        <tags/>
        <columnid>progress_634_710</columnid>
        <laneid>205</laneid>
        <leadtime>218</leadtime>
        <blocked>0</blocked>
        <blockedreason/>
        <subtaskdetails/>
        <columnname>Review</columnname>
        <lanename>Default Swimlane</lanename>
        <subscribers/>
        <attachments/>
        <logedtime>0</logedtime>
        <boardparent>50</boardparent>
        <archivedat/>
        <reporter>stevenmetz</reporter>
        <createdat>2018-04-24 15:36:52</createdat>
        <columnpath>In Progress.Review</columnpath>
        <workflow>0</workflow>
        <links>
            <child>0</child>
            <parent>0</parent>
            <related>0</related>
            <predecessor>0</predecessor>
            <successor>0</successor>
        </links>
        <customfields/>
        <updatedat>2018-05-24 10:38:43</updatedat>
    </item>
 */

