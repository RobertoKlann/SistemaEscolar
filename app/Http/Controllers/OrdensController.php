<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Ordens;
class OrdensController extends BaseController {
    private $ordem = null;

    public function __construct(Ordens $ordem) {
        $this->ordem = $ordem;
    }

    public function todasOrdens() {
        return response()->json($this->ordem->todasOrdens(), 200)
            ->header('Content-Type', 'application/json');
    }

    public function getOrdem($id) {
        $ordem = $this->ordem->getOrdem($id);
        if (!$ordem) {
            return response()->json(['response', 'Ordem não encontrada'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($ordem, 200)
            ->header('Content-Type', 'application/json');
    }

    public function addOrdem() {
        return response()->json($this->ordem->addOrdem(), 201)
            ->header('Content-Type', 'application/json');
    }

    public function atualizarOrdem($id) {
        $ordem = $this->ordem->atualizarOrdem($id);
        if (!$ordem) {
            return response()->json(['response', 'Ordem não encontrada'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($ordem, 200)
            ->header('Content-Type', 'application/json');
    }

    public function deletarOrdem($id) {
        $ordem = $this->ordem->deletarOrdem($id);
        if (!$ordem) {
            return response()->json(['response', 'Ordem não encontrada'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json(['response' => 'Ordem deletada com sucesso!'], 200)
            ->header('Content-Type', 'application/json');
    }

}