<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Turmas;
use Illuminate\Support\Facades\Input;

/**
 * Modelo dos Turmas
 *
 * @package Controller
 * @author  Roberto Oswaldo Klann
 * @since   02/10/2018
 */
class ControllerTurmas extends BaseController {

    private $turma = null;

    public function __construct(Turmas $oTurma) {
        $this->turma = $oTurma;
    }

    /**
     * Retorna todos os Turmas cadastrados.
     */
    public function getAllTurmas() {
        return response()->json($this->turma->getAllTurmas(), 200)
            ->header("Content-Type","application/json");
    }

    /**
     * Retorna o turma passado por parâmetro.
     */
    public function getTurma($iId) {
        $oTurma = $this->turma->getTurma($iId);
        if(!$oTurma) {
            return response()->json(['response','turma não encontrada'], 400)->header("Content-Type","application/json");
        }

        return response()->json($oTurma, 200)->header("Content-Type","application/json");
    }

    /**
     * Cadastra um novo turma.
     */
    public function saveTurma() {
        return response()->json($this->turma->saveTurma(), 201)->header("Content-Type","application/json");
    }

    /**
     * Realiza o update no turma com o id passado por parâmetro.
     */
    public function updateTurma($iId) {
        $oTurma = $this->turma->updateTurmaFromId($iId);

        if(!$oTurma) {
            return response()->json(['response', 'turma não encontrado'], 400)->header("Content-Type", "application/json");
        }

        return response()->json($oTurma, 200)->header("Content-Type", "application/json");
    }

    public function deleteTurma($iId) {
        $oTurma = $this->turma->deleteTurmaFromId($iId);

        if(!$oTurma) {
            return response()->json(['response', 'turma não encontrado'], 400)->header("Content-Type", "application/json");
        }

        return response()->json($oTurma, 200)->header("Content-Type", "application/json");
    }

}
