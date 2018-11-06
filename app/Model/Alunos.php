<?php

namespace App\Model;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

/**
 * Modelo dos Alunos.
 *
 * @package Model
 * @author  Roberto Oswaldo Klann
 * @since   02/10/2018
 */
class Alunos extends Model {

    protected $table      = 'tbalunos';
    protected $fillable   = array('alncodigo', 'alnnome', 'alncpf', 'alnemail', 'alndatanascimento', 'alnfone');
    protected $primaryKey = 'alncodigo';
    public $timestamps    = false;

    /**
     * Retorna todos os Alunos cadastrados.
     *
     * @return Alunos
     */
    public function getAllAlunos() {
        return self::all();
    }

    /**
     * Retorna o Aluno com o Id recebido por parâmetro.
     *
     * @return Alunos
     */
    public function getAluno($iId) {
        $oAluno = self::find($iId);

        if(is_null($oAluno)) {
            return false;
        }

        return $oAluno;
    }

    /**
     * Deleta o Aluno que tem o id recebido por parâmetro.
     *
     * @return boolean
     */
    public function deleteAlunoFromId($iId) {
        $oAluno = self::find($iId);

        if(is_null($oAluno)) {
            return false;
        }

        return $oAluno->delete();
    }

    /**
     * Realiza o Update no Aluno que veio por parâmetro.
     *
     * @return Aluno
     */
    public function updateAlunoFromId($iId) {
        $oAluno = self::find($iId);

        if(is_null($oAluno)) {
            return false;
        }

        $oInput = Input::all();

        $oAluno->fill($oInput);
        $oAluno->save();

        return $oAluno;
    }

    /**
     * Cadastra um novo Aluno.
     *
     * @return Aluno
     */
    public function saveAluno() {
        $oInput = Input::all();

        $oAluno = new Alunos($oInput);

        $oAluno->save();

        return $oAluno;
    }

}
