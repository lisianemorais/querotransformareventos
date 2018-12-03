<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventoProgramacao;


class EventoProgramacaoController extends Controller
{
    private $eventosProgramacao;

    public function __construct(EventoProgramacao $eventoProgramacao)
    {
        $this->eventosProgramacao = $eventoProgramacao;
    }

    public function index()
    {
        $eventosProgramacao = $this->eventosProgramacao->all();
        return View('index', compact('eventosProgramacao'));
    }

    public function getProgramacaoByIdEvento( Request $request, $idEvento )
    {
        $eventosProgramacao = $this->eventosProgramacao->where('evento_id', $idEvento);
//        return View('evento', compact('eventosProgramacao'));
    }
}
