<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventosModel;

class EventosController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $eventos = EventosModel::all();
        return View('index', compact('eventos'));
    }

    public function read( Request $request, $id )
    {
        $evento = EventosModel::find($id);
        return View('evento', compact('evento'));
    }
}
