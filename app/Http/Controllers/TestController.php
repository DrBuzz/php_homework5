<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TestBasicService;

class TestController extends Controller
{
    public function  getOne () {
        $a = new TestBasicService();
        $a->setName('Vladimir');
        $a->setAge(33);
        $a->setSex(true);
        return response()->json($a->getOne());
    }
    public function  setOne (request $request) {
        $a = new TestBasicService();
        $a->setName($request->get('name'));
        $a->setAge($request->get('age'));
        $a->setSex($request->get('sex'));
        //$b=;
        return response()->json($a->getOne());
    }
}


