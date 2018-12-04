<?php
include('../src/Helper/Helpers.php');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');


?>

@extends('template.template')

@section('content')
    <div class="well compra-ingresso conteudo">
        <div class=" col-md-12 row ingresso">
            <h3>Compra do Ingresso
            </h3>
            <hr>
            <div class="dados-compra col-md-6">
                <div class="">
                    <img class="img-compra" src="{{$evento->imagem_box}}" alt="imagem-ingresso">
                </div>
            </div>
            <div class="form-compra col-md-6" >
                <div class="programacao-dia form-group">
                    <label for="programacao-dia-select"> Dia do Evento:</label>
                    <select name="programacao-dia-select" id="programacao-dia-select" class="form-control">
                        @foreach($eventosProgramacao as $programacao)
                            <?php
                                $data = !empty($programacao->data_programacao)? Helpers::formatDateToBr($programacao->data_programacao): '';
                            ?>
                            <option value="{{ $programacao->id }}"><?=$data?> </option>
                            @endforeach

                    </select>
                </div>
                <div class="programacao-hora form-group">
                    <label for="programacao-hora-select"> Horário:</label>
                    <select name="programacao-hora-select" id="programacao-hora-select" class="form-control">
                        @foreach($eventosProgramacao as $programacao)

                            <option value="{{ $programacao->id }}"> {{$programacao->hora_programacao}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="qtd-ingresso form-group" >
                    <label for="qtd-ing"> Quantidade: </label>
                    <input name="qtd-ing" id="qtd-ing" type="number" max="10" class="form-control">
                </div>
                <div class="valor-ingresso form-group" >
                    <label for="vl-ing"> Valor: </label>
                    <input name="vl-ing" id="qtd-ing"  class="form-control">
                </div>

                <div class="btn-finaliza-compra" >
                    <div class="btn-comprar btn-comprar-js pull-right" onclick="getMessage()"> Finalizar Compra
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>

    $(document).ready(function() {
        console.log( "ready!" );
    });d

    function getMessage() {
        swal({
            title: "Parabéns",
            text: "Sua compra está sendo processada, aguarde um momento!",
            icon: "success",
            button: "Ok",
        })
    }
</script>
