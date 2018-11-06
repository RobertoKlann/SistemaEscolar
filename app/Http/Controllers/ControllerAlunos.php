<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Alunos;
use Illuminate\Support\Facades\Input;

/**
 * Modelo dos Alunos
 *
 * @package Controller
 * @author  Roberto Oswaldo Klann
 * @since   02/10/2018
 */
class ControllerAlunos extends BaseController {

    private $aluno = null;

    public function __construct(Alunos $oAluno) {
        $this->aluno = $oAluno;
    }

    /**
     * Retorna todos os Alunos cadastrados.
     */
    public function getAllAlunos() {
        return response()->json($this->aluno->getAllAlunos(), 200)
            ->header("Content-Type","application/json");
    }

    /**
     * Retorna o Aluno passado por parâmetro.
     */
    public function getAluno($iId) {
        $oAluno = $this->aluno->getAluno($iId);
        if(!$oAluno) {
            return response()->json(['response','Pessoa não encontrada'], 400)->header("Content-Type","application/json");
        }

        return response()->json($oAluno, 200)->header("Content-Type","application/json");
    }

    /**
     * Cadastra um novo Aluno.
     */
    public function saveAluno() {
        return response()->json($this->aluno->saveAluno(), 201)->header("Content-Type","application/json");
    }

    /**
     * Realiza o update no Aluno com o id passado por parâmetro.
     */
    public function updateAluno($iId) {
        $oAluno = $this->aluno->updateAlunoFromId($iId);

        if(!$oAluno) {
            return response()->json(['response', 'Aluno não encontrado'], 400)->header("Content-Type", "application/json");
        }

        return response()->json($oAluno, 200)->header("Content-Type", "application/json");
    }

    public function deleteAluno($iId) {
        $oAluno = $this->aluno->deleteAlunoFromId($iId);

        if(!$oAluno) {
            return response()->json(['response', 'Aluno não encontrado'], 400)->header("Content-Type", "application/json");
        }

        return response()->json($oAluno, 200)->header("Content-Type", "application/json");
    }

}
