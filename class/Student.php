<?php

require 'Person.php';
class Student extends Person
{

    private $attentClasses[];
    private $points[];

    public function __construct($xname, $name, $email)
    {
        parent::__construct($xname, $name, $email);

    }

    public function assignClass($classId)
    {
        $this->attentClasses = $classId;
    }

    public function addPoints($classId, $points)
    {
        $this->$points[$classId] += $points;
    }

    public function getPoints($classId, $points)
    {
        return $this->points[$classId];
    }

    public function getAttentClasses()
    {
        return $this->attentClasses
    }

}
