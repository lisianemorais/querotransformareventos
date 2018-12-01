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
}
