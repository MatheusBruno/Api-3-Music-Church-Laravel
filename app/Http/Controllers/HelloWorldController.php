<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloWorldController extends Controller{
    public function hello2($name) {
        return 'Hellow Controller ' . $name ;
    }

    public function hello3($name) {
        return  response()->json([
            "message" => "Hello World {$name}",
            "nome" => $name
        ]);
    }

    public function hello4($name, Request $request) {
        return  response()->json([
            "message" => "Hello World {$name}",
            "nome" => $request->foo
        ]);
    }

    public function hello($name, Request $request) {
        return  response()->json([
            "message" => "Hello World {$name}",
            "nome" => $request->all()
        ]);
    }
};
