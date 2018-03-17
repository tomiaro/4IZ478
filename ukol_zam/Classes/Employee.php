<?php

spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

class Employee
{

    private $firstName;
    private $lastName;
    private $sex;
    private $street;
    private $city;
    private $postCode;
    private $phone;
    private $email;
    private $position;
    private $superior;
    private $file;
    private $ident;
    private $data;
    public function __construct($data)
    {

        $this->file      = new CsvFile(dirname(__FILE__) . "\..\adresar.csv");
        $this->data      = $data;
        $this->ident     = $data['firstName'] . " " . $data['lastName'];
        $this->firstName = $data["firstName"];
        $this->lastName  = $data["lastName"];
        $this->sex       = $data["sex"];
        $this->street    = $data["street"];
        $this->city      = $data["city"];
        $this->postCode  = $data["postCode"];
        $this->phone     = $data["phone"];
        $this->email     = $data["email"];
        $this->position  = $data["position"];
        $this->superior  = $data["superior"];

    }

    private function employeeExists()
    {

        return $this->file->recordExist($this->ident);

    }



    public function updateEmloyee($dataUp)
    {
        if ($this->employeeExists == false) {
            return "Zmaněstnanec neexistuje";
        } else {
            $emloyees = $this->file->getData();
            foreach ($emloyees as $records) {
                $record = $records['firstName'] . " " . $records['lastName']
                if ($record = $this . ident) {
                    foreach ($dataUp as $key => $value) {
                        $records[$key] = $value;
                    }
                    $this->file->saveData($emloyees);
                    return true;
                }

            }

        }
        return false;

    }

    public function saveEmloyee()
    {
        if ($this->employeeExists == true) {
            return "Zaměstnanec již existuje.";
        } else {
            if ($this->data["position"] == "dělník" && $this->data["superior"] == "") {
                return "Dělník nemá nadřízeního.";
            } else {
                $this->file->addRecord($data);
                return true;
            }

        }

    }

}
