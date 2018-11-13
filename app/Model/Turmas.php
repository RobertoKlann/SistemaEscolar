<?php

namespace App\Model;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Modelo dos Turmas.
 *
 * @package Model
 * @author  Roberto Oswaldo Klann
 * @since   13/11/2018
 */
class Turmas extends Model {

    protected $table      = 'tbturmas';
    protected $fillable   = array('trmcodigo', 'trmcurso', 'trmprofessor', 'trmdatafinal', 'trmdatainicio', 'trmtotalhoras');
    protected $primaryKey = 'trmcodigo';
    public    $timestamps = false;

    /**
     * Retorna todos os Turmas cadastrados.
     *
     * @return Turmas
     */
    public function getAllTurmas() {
        return DB::select('SELECT * FROM tbturmas JOIN tbprofessores ON tbturmas.trmprofessor = tbprofessores.prfcodigo JOIN tbcursos ON tbcursos.crocodigo = tbturmas.trmcurso');
    }

    /**
     * Retorna o Turma com o Id recebido por parâmetro.
     *
     * @return Turmas
     */
    public function getTurma($iId) {
        $oTurma = self::find($iId);

        if(is_null($oTurma)) {
            return false;
        }

        return $oTurma;
    }

    /**
     * Deleta o Turma que tem o id recebido por parâmetro.
     *
     * @return boolean
     */
    public function deleteTurmaFromId($iId) {
        $oTurma = self::find($iId);

        if(is_null($oTurma)) {
            return false;
        }

        return $oTurma->delete();
    }

    /**
     * Realiza o Update no Turma que veio por parâmetro.
     *
     * @return Turma
     */
    public function updateTurmaFromId($iId) {
        $oTurma = self::find($iId);

        if(is_null($oTurma)) {
            return false;
        }

        $oInput = Input::all();

        $oTurma->fill($oInput);
        $oTurma->save();

        return $oTurma;
    }

    /**
     * Cadastra um novo Turma.
     *
     * @return Turma
     */
    public function saveTurma() {
        $oInput = Input::all();

        $oTurma = new Turmas($oInput);

        $oTurma->save();

        return $oTurma;
    }

}
