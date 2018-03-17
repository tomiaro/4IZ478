<?php

class Input
{

    public function checkInput($data)
    {
        $err[];

        foreach ($data as @$value) {
            $value = trim($value);
        }

        if (!preg_match('/^[a-zA-Z-]+$/', $data["firstName"])) {
            $err["firstName"] = "Špatně zadané křestní jméno";
        }

        if (!preg_match('/^[a-zA-Z-]+$/', $data["lastName"])) {
            $err["lastName"] = "Španě zadané příjmení";
        }

        if ($data["sex"] != "M" && $data["sex"] != "Ž") {
            $err["lastName"] = "Vyberte správné pohlaví";
        }

        if (!preg_match('/^[A-z]{1,64}[1-9][0-9]{1,10}$/', $data["street"])) {
            $err["street"] = "Vyplňte ulici ve formátu Název ČP";
        }
        if (!preg_match('/^[A-z]{1,64}( [A-z]{1,64}){0,4}$/', $data["city"])) 
        {
        	$err["city"] = "Špatně zadané město";
        }
        if (!preg_match('/^[1-9][0-9]{8}$/', $data["telephone"])) {
           $err["telephone"] = "Zadejte číslo ve formátu xxxxxxxxx";
        }
        if (!filter_var($data["email"], FILTER_VALIDATE_EMAIL))
        {
          $err["email"] = "Zadejte email ve formátu xxx@xxx.xx";
        }
        if ($data["position"] != "dělník" and $data["position"] != "mistr" ) 
        {
        	$err["position"] = "Nevybraná pozice";
        }

        if (!preg_match('/^[a-zA-Z-]+ [a-zA-Z-]+$/', $data["superior"]) and $data["superior"] != "" )
        {
        	$err["position"] = "Jméno nadřízeného je ve špatném formátu";
        }

        return $err;

    }

    public function treatInput($data)
        {
            foreach ($data as @$value) {
                $value = htmlspecialchars($value);
                $value = str_replace(";","",$value);
                $value = strip_tags($value)
            }

            return  $data; 

        }


}
