<?php


spl_autoload_register(function ($class_name) {
    require "Classes/" . $class_name . '.php';
});

$data["firstName"] = "tom";
$data["lastName"]  = "morkus";
$data["sex"]       = "male";
$data["street"] = "ss";
$data["city"] = "sds";
$data["postCode"] = "dsssds";
$data["phone"] = "sd";
$data["email"] = "dssddsd";
$data["position"] = "dsdsd";
$data["superior"] = "dsds";

$emloyee = new Employee($data);

echo $emloyee->employeeExists();

