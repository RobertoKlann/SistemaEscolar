<?php
/**
 * @author Ivan Vinicius Boneti
 * @package laravel_api
 * @subpackage controller 
 */
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Funcionario;
use Illuminate\Support\Facades\Input;


class FuncionarioController extends BaseController
{
    private $funcionario = null;

    public function __construct(Funcionario $funcionario)
    {
        $this->funcionario = $funcionario;
    }

    public function todosFuncionario()
    {
        return response()->json($this->funcionario->todosFuncionario(), 200)
            ->header('Content-Type', 'application/json');
    }


    public function getFuncionario($id)
    {
        $funcionario = $this->funcionario->getFuncionario($id);
        if (!$funcionario) {
            return response()->json(['response', 'Funcionario não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($funcionario, 200)
            ->header('Content-Type', 'application/json');
    }


    public function addFuncionario()
    {
        return response()->json($this->funcionario->addFuncionario(), 201)
            ->header('Content-Type', 'application/json');
    }

    
    public function atualizarFuncionario($id)
    {
        $funcionario = $this->funcionario->atualizarFuncionario($id);
        if (!$funcionario) {
            return response()->json(['response', 'Funcionario não encontrada'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($funcionario, 200)
            ->header('Content-Type', 'application/json');
    }

    public function deletarFuncionario($id)
    {
        $funcionario = $this->funcionario->deletarFuncionario($id);
        if (!$funcionario) {
            return response()->json(['response', 'Funcionario não encontrado'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json(['response' => 'Funcionario deletado com sucesso!'], 200)
            ->header('Content-Type', 'application/json');
    }



}
?>