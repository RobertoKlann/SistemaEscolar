<?php
//William Goebel
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends BaseController {
    private $produto = null;

        public function __construct(Produtos $produto){
            $this->produto = $produto;
        }

        public function getProdutos(){
            return response()->json($this->produto->getProdutos(),200)
                ->header("Content-Type","aplication/json");
        }

        public function getProduto($id){
            $produto= $this->produto->getProduto($id);
            if(!$produto){
                return response()->json(['response','Produto não encontarda'],400)
                ->header("Content-Type","aplication/json");
            }
            return response()->json($produto,400)
                ->header("Content-Type","aplication/json");
        }

        public function addProduto(){
            return response()->json($this->produto->addProduto(),201)->header("Content-Type","aplication/json");
        }

        public function atualizaProduto($id){
            $produto= $this->produto->atualizaProduto($id);
            if(!$produto){
                return response()->json(['response','Produto não encontarda'],400)->header("Content-Type","aplication/json");
            }
            return response()->json($produto,400)->header("Content-Type","aplication/json");
        }  

        public function deletaProduto($id){
            $produto= $this->produto->deletaProduto($id);
            if(!$produto){
                return response()->json(['response','Produto não encontarda'],200)
                ->header("Content-Type","aplication/json");
            }
        }
}