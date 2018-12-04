<?php

namespace App\Http\Controllers;

use App\EventosModel;
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

    public function show(  $idEvento )
    {
        $eventosProgramacao = $this->eventosProgramacao->whereRaw('evento_id = '.$idEvento)->get();
        $evento = EventosModel::find($idEvento);
        return view('evento_compras', compact('evento','eventosProgramacao'));
    }
}
