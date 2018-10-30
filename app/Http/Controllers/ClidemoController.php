<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Clidemo;

class ClidemoController extends Controller
{
    private $clidemo = null;

    public function __construct(Clidemo $clidemo) {
        $this->clidemo = $clidemo;
    }

    public function getClidemos() {
        return response()->json($this->clidemo->getClidemos(),200)
        ->header('Content-Type','application/json');
    }

    //Adiciona uma nova clidemo com base no Request
    public function addClidemo(Request $request) {
        $adicionou = $this->clidemo->addClidemo($request->all());
        if (!$adicionou) {
            return response()->json(['resposta' => 'Já existe'],409)
            ->header("Content-Type","application/json");
        } else {
            return response()->json($adicionou,201)
            ->header("Content-Type","application/json");
        }
        
    }

    public function getClidemo($id) {
        $clidemo = $this->clidemo->getClidemo($id);
        
        //Retorna um 404 se a clidemo não for localizada
        if (!$clidemo) {
            return response()->json(['resposta' => 'Não encontrado'],404)
            ->header("Content-Type","application/json");
        }
        //Se localizou, retorna a clidemo
        return response()->json($clidemo,200)
        ->header("Content-Type","application/json");
    }

    /*
    /   Abaixo é usado a classe "Request". Ela funciona da mesma
    /   forma que a Input, mas é atualizada para o Laravel 5.7
    */
    public function atualizaClidemo(Request $req, $id) {
        $clidemo = $this->clidemo->alteraClidemo($req,$id);

        //Tratamento se não foi localizado
        if (!$clidemo) {
            return response()->json(['resposta' => 'Não encontrado'],404)
            ->header("Content-Type","application/json");
        }
        //Se localizou, retorna a clidemo
        return response()->json($clidemo,202)
        ->header("Content-Type","application/json");
    }

    public function deletaClidemo($id) {
        $clidemo = $this->clidemo->deletaClidemo($id);

        //Tratamento se não foi localizado
        if (!$clidemo) {
            return response()->json(['resposta' => 'Não encontrado'],404)
            ->header("Content-Type","application/json");
        } else {
            //Se localizou, retorna a resposta
            return response()->json(['resposta' => 'Deletado'],202)
            ->header("Content-Type","application/json");
        }
        
    }
}
