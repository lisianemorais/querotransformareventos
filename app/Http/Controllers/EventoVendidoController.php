<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventoVendido;

class EventoVendidoController extends Controller
{
    private $eventoVendido;

    public function __construct(EventoVendido $eventoVendido)
    {
        $this->eventoVendido = $eventoVendido;
    }

    public function index()
    {
        $eventoVendido = $this->eventoVendido->all();
        return View('index', compact('eventoVendido'));
    }

    public function getProgramacaoByIdEventoProgramacao( Request $request, $idEventoProgramacao )
    {
        $eventoVendido = $this->eventoVendido->where('evento_programacao_id', $idEventoProgramacao);
//        return View('evento', compact('eventoVendido'));
    }
}
