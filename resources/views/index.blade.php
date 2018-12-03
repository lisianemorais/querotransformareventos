<?php
include('../src/Helper/Helpers.php');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
?>
@extends('template')

@section('content')

    <div class="conteudo">
        <h3 class="titulo-index">Lista de Eventos
            <hr>
        </h3>
        <div class="row">
            @if( count($eventos) > 0)
                <div class="lista-eventos well">
                    @foreach($eventos as $evento)
                        <?php $id = $evento->id?>
                        <div class="card item card-evento">
                            <a href="{{url('/evento', [$evento->id]) }}">
                                <span class="container-img">
                                <img class="card-img-top card-img-evento" src="{{ $evento->imagem_box }}" alt="Imagem Evento">
                                </span>
                                <div class="card-body card-info">
                                    <div class="card-data">
                                        <?php

                                            //tratamento nome
                                            if( strlen($evento->evento_nome) > 28) {
                                                $nomeEvento = substr($evento->evento_nome, 0, 28);
                                                $nomeEvento .=  '...';
                                            } else  {
                                                $nomeEvento = $evento->evento_nome;
                                            }

                                            //tratamento valor
                                             $valorEvento = number_format($evento->valor_ingresso, 2, ',', '.');

                                            $data_primeira_apresentacao = !empty($evento->dt_primeira_apresentacao)? Helpers::getDate($evento->dt_primeira_apresentacao): '';
                                            $data_ultima_apresentacao = !empty($evento->dt_ultima_apresentacao) ? Helpers::getDate($evento->dt_ultima_apresentacao): '';

                                            //Data inicial e final de aprensentaçoes
                                            if(!empty($data_ultima_apresentacao)) {
                                        ?>
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
                                                <span class="data-semana-unica"><?=$data_primeira_apresentacao[0]?></span>
                                                <span class="data-layer-unica"><?=$data_primeira_apresentacao[1]?></span>
                                            </div>
                                            <div class="data-mes">
                                                <span><?=$data_primeira_apresentacao[2]?></span>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="info-evento">
                                        <spa class="evento-cidade">{{$evento->local_cidade}}/{{$evento->local_uf}}</spa>
                                        <spa class="evento-nome"><?=$nomeEvento?></spa>
                                    </div>
                                    <div class="local-evento">{{$evento->local_nome}}</div>
                                    <div class="valor-evento"> A Partir de R$ <?=$valorEvento?></div>

                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                @else
                    <h1>Nenhum Evento cadastrado</h1>
                @endif
        </div>
        {!! $eventos->links() !!}
    </div>

@stop
