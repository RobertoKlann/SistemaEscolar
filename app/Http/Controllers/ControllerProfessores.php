<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Professores;
use Illuminate\Support\Facades\Input;

/**
 * Modelo dos Professores
 *
 * @package Controller
 * @author  Roberto Oswaldo Klann
 * @since   02/10/2018
 */
class ControllerProfessores extends BaseController {

    private $professor = null;

    public function __construct(Professores $oProfessor) {
        $this->professor = $oProfessor;
    }

    /**
     * Retorna todos os Professores cadastrados.
     */
    public function getAllProfessores() {
        return response()->json($this->professor->getAllProfessores(), 200)
            ->header("Content-Type","application/json");
    }

    /**
     * Retorna o turma passado por parâmetro.
     */
    public function getProfessor($iId) {
        $oProfessor = $this->professor->getProfessor($iId);
        if(!$oProfessor) {
            return response()->json(['response','professor não encontrada'], 400)->header("Content-Type","application/json");
        }

        return response()->json($oProfessor, 200)->header("Content-Type","application/json");
    }

    /**
     * Cadastra um novo turma.
     */
    public function saveProfessor() {
        return response()->json($this->professor->saveProfessor(), 201)->header("Content-Type","application/json");
    }

    /**
     * Realiza o update no turma com o id passado por parâmetro.
     */
    public function updateProfessor($iId) {
        $oProfessor = $this->professor->updateProfessorFromId($iId);

        if(!$oProfessor) {
            return response()->json(['response', 'professor não encontrado'], 400)->header("Content-Type", "application/json");
        }

        return response()->json($oProfessor, 200)->header("Content-Type", "application/json");
    }

    public function deleteProfessor($iId) {
        $oProfessor = $this->professor->deleteProfessorFromId($iId);

        if(!$oProfessor) {
            return response()->json(['response', 'professor não encontrado'], 400)->header("Content-Type", "application/json");
        }

        return response()->json($oProfessor, 200)->header("Content-Type", "application/json");
    }

}
