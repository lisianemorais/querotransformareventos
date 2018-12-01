<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('evento_id');
            $table->text('descricao')->nullable();
            $table->string('evento_nome');
            $table->string('seats_key')->nullable();
            $table->string('seats_public_key')->nullable();
            $table->integer('categoria_id');
            $table->integer('limite_ingressos_por_pedido');
            $table->dateTime('data');
            $table->dateTime('data_final')->nullable();
            $table->string('url_landing_page')->nullable();
            $table->dateTime('dt_primeira_apresentacao');
            $table->dateTime('dt_ultima_apresentacao');
            $table->string('imagem_wide')->nullable();
            $table->string('imagem_box')->nullable();
            $table->string('imagem_mobile')->nullable();
            $table->string('imagem_totem')->nullable();
            $table->integer('local_id');
            $table->string('local_nome');
            $table->string('local_cidade');
            $table->string('local_uf');
            $table->boolean('b_repeticao')->nullable();
            $table->integer('destaque')->nullable();
            $table->integer('nivel_destaque')->nullable();
            $table->boolean('b_assento_numerado')->nullable();
            $table->string('imagem_mapa')->nullable();
            $table->dateTime('dt_fim_vendas_internet');
            $table->string('seo_title')->nullable();
            $table->string('seo_meta_description')->nullable();
            $table->string('seo_meta_keywords')->nullable();
            $table->string('seo_og_title')->nullable();
            $table->string('seo_og_url')->nullable();
            $table->string('seo_og_image')->nullable();
            $table->string('seo_og_description')->nullable();
            $table->string('pontos_venda')->nullable();
            $table->integer('ingresso_inicial')->nullable();
            $table->integer('repeticao_id')->nullable();
            $table->string('url_portal')->nullable();

        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
