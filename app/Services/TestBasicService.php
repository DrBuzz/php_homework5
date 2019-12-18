<?php
namespace App\Services;
use Illuminate\Http\Request;
class TestBasicService
{
private $name, $age, $sex;
public function getOne(){
$array = ["name" => $this->name, "age" => $this->age,  "sex" => $this->sex];
return $array;
}
public function getTypes(){
$array = ["name" => "string", "age" => "int",  "sex" => "bool"];
return $array;
}
public function getName(){
return $this->name;
}
public function getAge(){
return $this->age;
}
public function getSex(){
return $this->sex;
}
public function setName($name){
$this->name=$name;
}
public function setAge($age){
$this->age=$age;
}
public function setSex($sex){
$this->sex=$sex;
}

}
