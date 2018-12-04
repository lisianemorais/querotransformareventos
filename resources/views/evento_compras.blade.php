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
                    <input name="qtd-ing" id="qtd-ing" type="number" value="1" max="10" onchange="calculaValorIngresso()" class="form-control">
                </div>
                <div class="valor-ingresso form-group " >
                    <label for="vl-ing"> Valor: </label>
                    <input name="vl-ing" id="vl-ing" disabled class="form-control" value="{{$evento->valor_ingresso}}">
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
    let valor_ingresso = <?= $evento->valor_ingresso?>;

    window.onload = function(){
        document.getElementById("vl-ing").value = formatMoney(valor_ingresso, 2, ',', '.');
    }

    function calculaValorIngresso() {
        let qtd = document.getElementById("qtd-ing").value;
        document.getElementById("vl-ing").value = formatMoney(valor_ingresso * qtd, 2, ',', '.');
    }

    function getMessage() {
        swal({
            text: "Sua compra está sendo processada, aguarde um momento!",
            icon: "success",
            button: "Ok",
        })
    }

    function formatMoney(n, c, d, t) {
        var c = isNaN(c = Math.abs(c)) ? 2 : c,
            d = d == undefined ? "." : d,
            t = t == undefined ? "," : t,
            s = n < 0 ? "-" : "",
            i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
            j = (j = i.length) > 3 ? j % 3 : 0;

        return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
    };
</script>
