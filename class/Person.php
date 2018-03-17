<?php
class Person
{
    private $xname;
    private $name;
    private $email;
    public function __construct($xname, $name, $email)
    {
        $this->$name  = $name;
        $this->$xname = $xname;
        $this->$email = $email; 

    }

    public function getName()
    {
        return $this->$name;
    }

    public function getXname()
    {
        return $this->$xname;
    }

}
