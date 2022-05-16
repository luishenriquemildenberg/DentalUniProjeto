<?php

namespace App\Http\Controllers;

use App\Http\Requests\DentistaRequest;
use App\Models\Dentista;


class DentistaController extends Controller
{

    private $modelClass;

    public function __construct(Dentista $modelClass){
        $this->modelClass = $modelClass;
    }
    public function insert(DentistaRequest $request){
        
        $dados = [
            'name' => $request->name,
            'email' => $request->email,
            'cro' => $request->cro,
            'cro_uf' => $request->cro_uf
        ];

        //dd($dados);

        $this->modelClass->insert($dados); //verificar depois como vem da view
        return view('home');
    }

    public function uptade(DentistaRequest $request){
        
    }
    public function select(DentistaRequest $request){
        
    }

    public function selectList(DentistaRequest $request){
        $lista = $this->modelClass->all();
        return view('listadentista', [         //retornando a view
            'listadentista' => $lista
        ]);
    }

    public function delete(DentistaRequest $request){
        
    }

}
