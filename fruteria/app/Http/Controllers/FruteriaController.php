<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FruteriaController extends Controller
{
    
    public function index(){
        return view('index');
    }

    public function listar(){
        $frutas=DB::table('frutas')
            ->orderBy('id','desc')
            ->get();

            return view('fruta.listar',[
                'frutas' => $frutas
            ]);
    }

}
