<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Cursos;
use Illuminate\Support\Facades\Input;

/**
 * Modelo dos Cursos
 *
 * @package Controller
 * @author  Roberto Oswaldo Klann
 * @since   02/10/2018
 */
class ControllerCursos extends BaseController {

    private $curso = null;

    public function __construct(Cursos $oCurso) {
        $this->curso = $oCurso;
    }

    /**
     * Retorna todos os Cursos cadastrados.
     */
    public function getAllCursos() {
        return response()->json($this->curso->getAllCursos(), 200)
            ->header("Content-Type","application/json");
    }

    /**
     * Retorna o curso passado por parâmetro.
     */
    public function getCurso($iId) {
        $oCurso = $this->curso->getCurso($iId);
        if(!$oCurso) {
            return response()->json(['response','Pessoa não encontrada'], 400)->header("Content-Type","application/json");
        }

        return response()->json($oCurso, 200)->header("Content-Type","application/json");
    }

    /**
     * Cadastra um novo curso.
     */
    public function saveCurso() {
        return response()->json($this->curso->saveCurso(), 201)->header("Content-Type","application/json");
    }

    /**
     * Realiza o update no curso com o id passado por parâmetro.
     */
    public function updateCurso($iId) {
        $oCurso = $this->curso->updateCursoFromId($iId);

        if(!$oCurso) {
            return response()->json(['response', 'curso não encontrado'], 400)->header("Content-Type", "application/json");
        }

        return response()->json($oCurso, 200)->header("Content-Type", "application/json");
    }

    public function deleteCurso($iId) {
        $oCurso = $this->curso->deleteCursoFromId($iId);

        if(!$oCurso) {
            return response()->json(['response', 'curso não encontrado'], 400)->header("Content-Type", "application/json");
        }

        return response()->json($oCurso, 200)->header("Content-Type", "application/json");
    }

}
