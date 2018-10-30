<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Regiao;

class RegiaoController extends BaseController
{
    private $regiao = null;

    public function __construct(Regiao $regiao)
    {
        $this->regiao = $regiao;
    }

    public function todasRegioes()
    {
        return response()->json($this->regiao->todasRegioes(), 200)
            ->header('Content-Type', 'application/json');
    }

    public function getRegiao($id)
    {
        $regiao = $this->regiao->getRegiao($id);
        if (!$regiao) {
            return response()->json(['response', 'Regiao não encontrada'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($regiao, 200)
            ->header('Content-Type', 'application/json');
    }

    public function addRegiao()
    {
        return response()->json($this->regiao->addRegiao(), 201)
            ->header('Content-Type', 'application/json');
    }

    public function atualizarRegiao($id)
    {
        $regiao = $this->regiao->atualizarRegiao($id);
        if (!$regiao) {
            return response()->json(['response', 'Regiao não encontrada'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json($regiao, 200)
            ->header('Content-Type', 'application/json');
    }

    public function deletarRegiao($id)
    {
        $regiao = $this->regiao->deletarRegiao($id);
        if (!$regiao) {
            return response()->json(['response', 'Regiao não encontrada'], 400)
                ->header('Content-Type', 'application/json');
        }
        return response()->json(['response' => 'Regiao deletada com sucesso!'], 200)
            ->header('Content-Type', 'application/json');
    }

}
