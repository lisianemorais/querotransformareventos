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
                    <select name="programacao-dia-select" id="programacao-dia-select" class="form-control"></select>
                </div>
                <div class="programacao-hora form-group">
                    <label for="programacao-hora-select"> Horário:</label>
                    <select name="programacao-hora-select" id="programacao-hora-select" class="form-control"></select>
                </div>
                <div class="qtd-ingresso form-group">
                    <label for="qtd-ing"> Quantidade: </label>
                    <input name="qtd-ing" id="qtd-ing" type="number" max="10" class="form-control"></input>
                </div>
                <div class="btn-finaliza-compra" onclick="getMessage()">
                    <a href="" class="btn-comprar btn-comprar-js pull-right"> Finalizar Compra
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    function getMessage() {
        swal({
            title: "Parebéns!",
            text: "Sua compra foi processa com sucesso!",
            icon: "success",
            button: "Ok",
            closeModal: false,
        })
    }
</script>
