<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\FuncionariosTerritorios;
use Illuminate\Support\Facades\Input;

class FuncionariosTerritoriosController extends BaseController {

    private $funcionarioTerritorio = null;

    public function __construct(FuncionariosTerritorios $funcionarioTerritorio) {
        $this->funcionarioTerritorio = $funcionarioTerritorio;
    }

    public function todosFuncionariosTerritorios() {
        return response()->json($this->funcionarioTerritorio->todosFuncionariosTerritorios(), 200)
            ->header("Content-Type","application/json");
    }

    public function getFuncionarioTerritorio($idFuncionario, $idTerritorio) {
        $funcionarioTerritorio = $this->funcionarioTerritorio->getFuncionarioTerritorio($idFuncionario, $idTerritorio);
        if (!$funcionarioTerritorio) {
            return response()->json(['response','Funcionário-Território não encontrado'], 400)
            ->header("Content-Type","application/json");
        }
        return response()->json($funcionarioTerritorio, 200)
            ->header("Content-Type","application/json");
    }

    public function salvarFuncionarioTerritorio() {
        return response()->json($this->funcionarioTerritorio->salvarFuncionarioTerritorio(), 201)
            ->header("Content-Type","application/json");
    }

    public function atualizarFuncionarioTerritorio($idFuncionario, $idTerritorio) {
        $funcionarioTerritorio = $this->funcionarioTerritorio->atualizarfuncionarioTerritorio($idFuncionario, $idTerritorio);
        if (!$funcionarioTerritorio) {
            return response()->json(['response','Funcionário-Território não encontrado'], 400)
            ->header("Content-Type","application/json");
        }
        return response()->json($funcionarioTerritorio, 200)
            ->header("Content-Type","application/json");
    }

    public function deletarFuncionarioTerritorio($idFuncionario, $idTerritorio) {
        $funcionarioTerritorio = $this->funcionarioTerritorio->deletarFuncionarioTerritorio($idFuncionario, $idTerritorio);
        if (!$funcionarioTerritorio) {
            return response()->json(['response','Funcionário-Território não encontrado'], 400)
            ->header("Content-Type","application/json");
        }
        return response()->json($funcionarioTerritorio, 200)
            ->header("Content-Type","application/json");
    }
}

?>
