<?php

spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

class CsvFile
{

    private $filePath;

    public function __construct($filePath)
    {

        $this->filePath = $filePath;
    }

    public function getData()
    {

        $data = array_map(function ($v) {return str_getcsv($v, ";");}, file($this->filePath));
        array_walk($data, function (&$a) use ($data) {
            $a = array_combine($data[0], $a);
        });
        array_shift($data);

        $input = new Input();
        $errs  = $input->checkInput($data)

        if isEmpty($errs) {
            return $data;
        }
        else
        {
            echo "Data v souboru jsou ve špatném formátu";
            die();
        }

    }

    public function recordExist($id)
    {
        $data = $this->getData();

        foreach ($data as $records) {
            //var_dump($records);
            $record = "";
            $record = $records['firstName'] . " " . $records['lastName'];
            if ($id == $record) {
                return true;
            }
        }
        return false;

    }

    public function getColumn($id, $columnName)
    {
        $data = $this->getData();
        foreach ($data as $records) {
            //var_dump($records);
            $record = "";
            $record = $records['firstName'] . " " . $records['lastName'];
            if ($id == $record) {

                return $records[$columnName];
            }
        }
        return false;
    }

    public function addRecord($row)
    {

    }

}
