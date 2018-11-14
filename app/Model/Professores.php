<?php

namespace App\Model;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

/**
 * Modelo dos Professores.
 *
 * @package Model
 * @author  Roberto Oswaldo Klann
 * @since   13/11/2018
 */
class Professores extends Model {

    protected $table      = 'tbprofessores';
    protected $fillable   = array('prfcodigo', 'prfnome', 'prfcurriculo', 'prfemail', 'prffone');
    protected $primaryKey = 'prfcodigo';
    public    $timestamps = false;

    /**
     * Retorna todos os Professores cadastrados.
     *
     * @return Professores
     */
    public function getAllProfessores() {
        return self::all();
    }

    /**
     * Retorna o Professor com o Id recebido por parâmetro.
     *
     * @return Professores
     */
    public function getProfessor($iId) {
        $oProfessor = self::find($iId);

        if(is_null($oProfessor)) {
            return false;
        }

        return $oProfessor;
    }

    /**
     * Deleta o Professor que tem o id recebido por parâmetro.
     *
     * @return boolean
     */
    public function deleteProfessorFromId($iId) {
        $oProfessor = self::find($iId);

        if(is_null($oProfessor)) {
            return false;
        }

        return $oProfessor->delete();
    }

    /**
     * Realiza o Update no Professor que veio por parâmetro.
     *
     * @return Professor
     */
    public function updateProfessorFromId($iId) {
        $oProfessor = self::find($iId);

        if(is_null($oProfessor)) {
            return false;
        }

        $oInput = Input::all();

        $oProfessor->fill($oInput);
        $oProfessor->save();

        return $oProfessor;
    }

    /**
     * Cadastra um novo Professor.
     *
     * @return Professor
     */
    public function saveProfessor() {
        $oInput = Input::all();

        $oProfessor = new Professores($oInput);

        $oProfessor->save();

        return $oProfessor;
    }

}
