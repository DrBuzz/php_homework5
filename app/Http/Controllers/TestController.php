<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function  getOne () {
        $a = new TestOne();
        $a->setName('Vladimir');
        $a->setAge(33);
        $a->setSex(true);
        return response()->json($a->getOne());
    }
    public function  setOne (request $request) {
        $a = new TestOne();
        $a->setName($request->get('name'));
        $a->setAge($request->get('age'));
        $a->setSex($request->get('sex'));
        //$b=;
        return response()->json($a->getOne());
    }
}

class TestOne
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
