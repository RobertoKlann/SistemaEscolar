<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Pessoa;
use Illuminate\Support\Facades\Input;

class PessoaController extends BaseController {

    private $pessoa = null;

    public function __construct(Pessoa $pessoa) {
        $this->pessoa = $pessoa;
    }

    public function todasPessoas() {
        // $pessoas = Pessoa::orderBy('primeiro_nome', 'desc')
        //     ->get();
        //     return $pessoas;
        return response()->json($this->pessoa->todasPessoas(), 200)
            ->header("Content-Type","application/json");
    }

    public function salvarPessoa() {
        return response()->json($this->pessoa->salvarPessoa(), 201)
            ->header("Content-Type","application/json");
    }

    public function atualizarPessoa($id) {
        $pessoa = $this->pessoa->atualizarPessoa($id);
        if (!$pessoa) {
            return response()->json(['response','Pessoa não encontrada'], 400)
            ->header("Content-Type","application/json");
        }
        return response()->json($pessoa, 200)
            ->header("Content-Type","application/json");
    }

    public function getPessoa($id) {
        $pessoa = $this->pessoa->getPessoa($id);
        if (!$pessoa) {
            return response()->json(['response','Pessoa não encontrada'], 400)
            ->header("Content-Type","application/json");
        }
        return response()->json($pessoa, 200)
            ->header("Content-Type","application/json");
    }

    public function deletarPessoa($id) {
        $pessoa = $this->pessoa->deletarPessoa($id);
        if (!$pessoa) {
            return response()->json(['response','Pessoa não encontrada'], 400)
            ->header("Content-Type","application/json");
        }
        return response()->json($pessoa, 200)
            ->header("Content-Type","application/json");
    }
}

?>
