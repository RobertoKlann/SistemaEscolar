<?php
//by Gabriel Klug
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Produto;
use Illuminate\Support\Facades\Input;


class ProdutoController extends BaseController {
    private $produto = null;

    public function __construct(Produto $produto) {
        $this->produto = $produto;
    }

    public function todosProdutos() {
        // $pessoas = Pessoa::orderBy('primeiro_nome', 'desc')
        //     ->get();
        //     return $pessoas;
        return response()->json($this->produto->todosProdutos(), 200)
            ->header("Content-Type","application/json");
    }

    public function salvarProduto() {
        return response()->json($this->produto->salvarProduto(), 201)
            ->header("Content-Type","application/json");
    }

    public function atualizarProduto($IDProduto) {
        $produto = $this->produto->atualizarProduto($IDProduto);
        if (!$produto) {
            return response()->json(['response','Produto não encontrado'], 400)
            ->header("Content-Type","application/json");
        }
        return response()->json($produto, 200)
            ->header("Content-Type","application/json");
    }

    public function getProduto($IDProduto) {
        $produto = $this->produto->getProduto($IDProduto);
        if (!$produto) {
            return response()->json(['response','Produto não encontrado'], 400)
            ->header("Content-Type","application/json");
        }
        return response()->json($produto, 200)
            ->header("Content-Type","application/json");
    }

    public function deletarProduto($IDProduto) {
        $produto = $this->produto->deletarProduto($IDProduto);
        if (!$produto) {
            return response()->json(['response','Produto não encontrado'], 400)
            ->header("Content-Type","application/json");
        }
        return response()->json($produto, 200)
            ->header("Content-Type","application/json");
    }

}
?>