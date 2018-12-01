<?php

use Illuminate\Database\Seeder;

class EventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventos')->delete();
        DB::table('eventos')->insert([
            [
                "evento_id"=>1913,
                "evento_nome"=>"Evento sem SeatsIO com nome grande para testar a quantidade",
                "seats_key"=>"",
                "seats_public_key"=>"c0ab1473-c4d0-4b1e-82ac-8da9cc0de7e5",
                "categoria_id"=>11,
                "limite_ingressos_por_pedido"=>8,
                "data"=>"2018-12-20 23:30:30",
                "data_final"=>"2019-3-20 23:30:30",
                "url_landing_page"=>null,
                "dt_primeira_apresentacao"=>"2018-12-20 23:30:30",
                "dt_ultima_apresentacao"=>"2018-12-20 23:30:30",
                "imagem_wide"=>"https://eventicket.s3-sa-east-1.amazonaws.com/imgs/3831-slide-racanegra.jpg",
                "imagem_box"=>"https://eventicket.s3-sa-east-1.amazonaws.com/imgs/3830-small-racanegra.jpg",
                "imagem_mobile"=>"https://eventicket.s3-sa-east-1.amazonaws.com/imgs/3907-4378-card-porta-web-app-510x310-atom-1.jpg",
                "imagem_totem"=>null,
                "local_id"=>881,
                "local_nome"=>"Amantaní",
                "local_cidade"=>"Caapiranga",
                "local_uf"=>"AM",
                "b_repeticao"=>true,
                "destaque"=>1,
                "nivel_destaque"=>4,
                "b_assento_numerado"=>false,
                "imagem_mapa"=>"https://eventicket.s3-sa-east-1.amazonaws.com/imgs/4018-1600x580.jpg",
                "dt_fim_vendas_internet"=>"2018-12-20 17:30:30",
                "seo_title"=>"",
                "seo_meta_description"=>"",
                "seo_meta_keywords"=>"",
                "seo_og_title"=>"",
                "seo_og_url"=>null,
                "seo_og_image"=>null,
                "seo_og_description"=>"",
                "pontos_venda"=>"",
                "ingresso_inicial"=>10,
                "repeticao_id"=>9191,
                "url_portal"=>"https://uhuu.com/evento/am/caapiranga/evento-sem-seatsio-com-nome-grande-para-testar-a-quantidade-3619",
                'descricao'            => 'teste descricao',
            ],

        ]);
    }
}
