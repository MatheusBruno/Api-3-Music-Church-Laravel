<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BandController extends Controller
{
    public function getAll() {

        $bands = $this->getBands();

        return response()->json($bands);

    }

    protected function getBands() {
        return [
            ["id" => 1, "name" => "Vem me buscar", 'gender' => 'gotica'],
            ["id" => 2, "name" => "Me atraiu", 'gender' => "gotica"],
            ["id" => 3, "name" => "Deus não está morto", 'gender' => "gotica"]
        ];
    }

}
