<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BandController extends Controller
{
    private $dados = [
        ["id" => 1, "name" => "Vem me buscar", 'gender' => 'gotica'],
        ["id" => 2, "name" => "Me atraiu", 'gender' => "gotica"],
        ["id" => 3, "name" => "Deus não está morto", 'gender' => "gotica"]
    ];

    public function getAll() {

        $bands = $this->getBands();

        return response()->json($bands);

    }


    public function getById($id) {

        $bands = null;

        foreach ($this->getBands() as $_band) {
            if ($_band['id'] == $id){
                $bands = $_band;
            }
        }

        if ($bands){
            $retor = response()->json($bands);
        }else{
            $retor = abort(404);
        }

        return $retor;

    }




    public function getBandsByGender($gender) {
        $bands = [];

        foreach ($this->getBands() as $_band) {
            if ($_band['gender'] == $gender){
                $bands[] = $_band;
            }
        }

        return response()->json($bands);
    }


    public function setBandNew(Request $request){
        $validate = $request->validate([
            'name' => 'required|min:3'
        ]);
        return response()->json($request);
    }

    protected function getBands() {
        return $this->dados;
    }

}
