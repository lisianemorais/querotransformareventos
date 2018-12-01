@extends('template')

@section('content')
    ss
    @if( count($eventos) > 0)
        {{$eventos}}
        @foreach($eventos as $evento)
            {{$evento->evento_nome}}
        @endforeach
    @else
        <h1>Nenhum Envento cadastrado</h1>
    @endif
@stop