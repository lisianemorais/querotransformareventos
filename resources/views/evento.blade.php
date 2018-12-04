<?php
    include('../src/Helper/Helpers.php');
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    $data_primeira_apresentacao = !empty($evento->dt_primeira_apresentacao)? Helpers::getDate($evento->dt_primeira_apresentacao): '';
    $data_ultima_apresentacao = !empty($evento->dt_ultima_apresentacao) ? Helpers::getDate($evento->dt_ultima_apresentacao): '';

    $hora_apresentacao = !empty($evento->dt_primeira_apresentacao)? Helpers::getHorarioEvento($evento->dt_primeira_apresentacao): '';

?>
@extends('template.template')
@section('content')
<div class="evento-descricao">
    <div class="banner-evento">
        <img class="img-descricao-evento" src="{{$evento->imagem_wide}}" alt="imagem-evento">
        <hr>
    </div>
    <div class="evento-conteudo limite-pg">
        <div class="btn-comprar-evento">
            <a href="{{url('/evento/evento_programacao', [$evento->id]) }}" class="btn-comprar btn-comprar-js pull-right"> Comprar Ingresso
            </a>
        </div>
        <div class="row breadcrum">
            <div class="btn-voltar">
                <a href="{{ URL::route('home') }}" class="pull-left"> << Voltar </a>
            </div>
            <span class="pull-right a-partir"> A partir de R$ <?= number_format($evento->valor_ingresso, 2, ',', '.')?></span>
        </div>
        <div class="row evento-descricao ">
            <div class="titulo-evento col-xs-12">
                <h3 class="titulo-principal"> {{$evento->evento_nome}}</h3>
                <hr>
            </div>
            <div class="col-xs-12 col-md-2 col-md-push-10 ">
                <div class="data-evento-descricao col-xs-4 col-md-12 ">
                    <?php if(!empty($data_ultima_apresentacao)) {?>
                        <div class="data-double">
                            <div class="data-inicial">
                                <span class="data-semana"><?=$data_primeira_apresentacao[0]?></span>
                                <span class="data-layer"><?=$data_primeira_apresentacao[1]?></span>
                            </div>
                            <div class="data-final">
                                <span class="data-semana"><?=$data_ultima_apresentacao[0]?></span>
                                <span class="data-layer"><?=$data_ultima_apresentacao[1]?></span>
                            </div>
                        </div>
                        <div class="data-mes double">
                            <span><?=$data_primeira_apresentacao[2]?></span>
                            <span><?=$data_ultima_apresentacao[2]?></span>
                        </div>
                    <?php } else {?>
                        <div class="data">
                            <span class="data-semana"><?=$data_primeira_apresentacao[0]?></span>
                            <span class="data-layer-unica"><?=$data_primeira_apresentacao[1]?></span>
                        </div>
                        <div class="data-mes">
                            <span><?=$data_primeira_apresentacao[2]?></span>
                        </div>
                    <?php } ?>
                </div>
                <div class="horario-evento  col-xs-4 col-md-12">
                    <div class="texto bold"><?=$hora_apresentacao?></div>
                    <div class="bottom-label">Horário</div>
                </div>
                <div class="local-evento-descricao col-xs-4 col-md-12">
                    <div class="texto bold">{{$evento->local_nome}}</div>
                    <div class="cidade-evento-peq">{{$evento->local_cidade}}/{{$evento->local_uf}}</div>
                    <div class="bottom-label">Local</div>
                </div>
            </div>
            <div class="col-xs-12 col-md-10 col-md-pull-2 descricao-principal-evento">
                <p>{!! $evento->descricao !!}</p>
            </div>
        </div>

    </div>

</div>
    @endsection
