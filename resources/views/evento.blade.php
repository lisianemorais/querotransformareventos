@extends('template');

@section('content')
<div class="evento-descricao">
    <div class="banner">
        <img src="{{$evento->imagem_wide}}" alt="imagem-evento">
    </div>
    <div class="evento-detalhe">
        
    </div>
    {{$evento}}

</div>
    @endsection