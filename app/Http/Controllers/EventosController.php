<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventosModel;

class EventosController extends Controller
{
    private $eventos;

    public function __construct(EventosModel $evento)
    {
        $this->eventos = $evento;
    }

    public function index()
    {
        $eventos = $this->eventos->paginate(3);
        return View('index', compact('eventos'));
    }

    public function read( $id )
    {
        $evento = $this->eventos->find($id);
        return View('evento', compact('evento'));
    }
}
