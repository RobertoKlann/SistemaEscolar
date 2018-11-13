<?php

namespace App\Model;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

/**
 * Modelo dos Cursos.
 *
 * @package Model
 * @author  Roberto Oswaldo Klann
 * @since   13/11/2018
 */
class Cursos extends Model {

    protected $table      = 'tbcursos';
    protected $fillable   = array('crocodigo', 'crodescricao', 'cromensalidade', 'cronome', 'crototalhoras');
    protected $primaryKey = 'crocodigo';
    public    $timestamps = false;

    /**
     * Retorna todos os Cursos cadastrados.
     *
     * @return Cursos
     */
    public function getAllCursos() {
        return self::all();
    }

    /**
     * Retorna o Curso com o Id recebido por parâmetro.
     *
     * @return Cursos
     */
    public function getCurso($iId) {
        $oCurso = self::find($iId);

        if(is_null($oCurso)) {
            return false;
        }

        return $oCurso;
    }

    /**
     * Deleta o Curso que tem o id recebido por parâmetro.
     *
     * @return boolean
     */
    public function deleteCursoFromId($iId) {
        $oCurso = self::find($iId);

        if(is_null($oCurso)) {
            return false;
        }

        return $oCurso->delete();
    }

    /**
     * Realiza o Update no Curso que veio por parâmetro.
     *
     * @return Curso
     */
    public function updateCursoFromId($iId) {
        $oCurso = self::find($iId);

        if(is_null($oCurso)) {
            return false;
        }

        $oInput = Input::all();

        $oCurso->fill($oInput);
        $oCurso->save();

        return $oCurso;
    }

    /**
     * Cadastra um novo Curso.
     *
     * @return Curso
     */
    public function saveCurso() {
        $oInput = Input::all();

        $oCurso = new Cursos($oInput);

        $oCurso->save();

        return $oCurso;
    }

}
