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
                "id" => 1,
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
                "dt_ultima_apresentacao"=>null,
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
                'descricao'=> "<p>Em 2014 os dois gigantes, Ra&ccedil;a Negra e S&oacute; Pra Contrariar se encontram para presentear o p&uacute;blico com as can&ccedil;&otilde;es e o samba inovador que marcou gera&ccedil;&otilde;es e inspirou um n&uacute;mero incalcul&aacute;vel de f&atilde;s que se renova de forma autom&aacute;tica, &nbsp;&eacute; impressionante a quantidade de rian&ccedil;as e adolescentes conhecedores do repert&oacute;rio das bandas.</p>\r\n\r\n<p>A ideia surgiu dos l&iacute;deres das duas bandas, &nbsp;Alexandre Pires e o Luiz Carlos, que alguns anos idealizaram o projeto, mas devido agenda n&atilde;o o imposs&iacute;vel concretizar. Entretanto, o momento chegou com nome que faz jus&agrave; suas respectivas ist&oacute;rias, &quot;Gigantes do Samba&quot;,apresenta Ra&ccedil;a Negra e S&oacute; Pra Contrariar dividindo o mesmo palco, para deleite do p&uacute;blico. Mais um sucesso carimbado que ganhou o Brasil com uma turn&ecirc; que percorreu todo o territ&oacute;rio nacional.</p>\r\n",
                'valor_ingresso' => 50.00
            ],

            [
                "id" => 2,
                "evento_id"=>1943,
                "evento_nome"=>"Um Natal pelo mundo",
                'descricao' => '<p>Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est. Quem manda na minha terra sou euzis! Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. N&atilde;o sou faixa preta cumpadi, sou preto inteiris, inteiris.</p>

<p>Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Si u mundo t&aacute; muito paradis? Toma um m&eacute; que o mundo vai girarzis! Copo furadis &eacute; disculpa de bebadis, arcu quam euismod magna. T&aacute; deprimidis, eu conhe&ccedil;o uma cachacis que pode alegrar sua vidis.</p>

<p>Viva Forevis aptent taciti sociosqu ad litora torquent. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Cevadis im ampola pa arma uma pindureta. Per aumento de cachacis, eu reclamis.</p>

<p>Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus. Sapien in monti palavris qui num significa nadis i pareci latim. M&eacute; faiz elementum girarzis, nisi eros vermeio. Manduma pindureta quium dia nois paga.</p>

<address>&nbsp;</address>
',
                "seats_key"=>"",
                "seats_public_key"=>"c0ab1473-c4d0-4b1e-82ac-8da9cc0de7e5",
                "categoria_id"=>11,
                "limite_ingressos_por_pedido"=>8,
                "data"=>"2019-02-07 23:30:30",
                "data_final"=>null,
                "url_landing_page"=>null,
                "dt_primeira_apresentacao"=>"2019-02-07 23:30:30",
                "dt_ultima_apresentacao"=>"2019-12-07 23:30:30",
                "imagem_wide"=>"https://eventicket.s3-sa-east-1.amazonaws.com/imgs/4012-layer-12.jpg" ,
                "imagem_box"=>"https://imagens.uhuu.com/imgs/9611-untitled-1.jpg",
                "imagem_mobile"=>null,
                "imagem_totem"=>"https://eventicket.s3-sa-east-1.amazonaws.com/imgs/4022-1537316482234remmina-2018-9-19-02250158275.png",
                "local_id"=>908,
                "local_nome"=>"Olympic Gymnastics Arena",
                "local_cidade"=>"Porto Alegre",
                "local_uf"=>"RS",
                "b_repeticao"=>true,
                "destaque"=>1,
                "nivel_destaque"=>3,
                "b_assento_numerado"=>true,
                "imagem_mapa"=>null,
                "dt_fim_vendas_internet"=>"2019-02-07 17:30:30",
                "seo_title"=>"",
                "seo_meta_description"=>"",
                "seo_meta_keywords"=>"",
                "seo_og_title"=>"",
                "seo_og_url"=>null,
                "seo_og_image"=>null,
                "seo_og_description"=>"",
                "pontos_venda"=>"",
                "ingresso_inicial"=>15,
                "repeticao_id"=>9164,
                "url_portal"=>"https://uhuu.com/evento/rs/porto-alegre/evento-com-seatsio-3656",
                'valor_ingresso' => 35.00
            ],

            [
                "id" => 3,
                "evento_id"=>1973,
                "evento_nome"=>"Grande Desfile de Natal",
                'descricao' => '<p>Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est. Quem manda na minha terra sou euzis! Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. N&atilde;o sou faixa preta cumpadi, sou preto inteiris, inteiris.</p>

<p>Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Si u mundo t&aacute; muito paradis? Toma um m&eacute; que o mundo vai girarzis! Copo furadis &eacute; disculpa de bebadis, arcu quam euismod magna. T&aacute; deprimidis, eu conhe&ccedil;o uma cachacis que pode alegrar sua vidis.</p>

<p>Viva Forevis aptent taciti sociosqu ad litora torquent. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Cevadis im ampola pa arma uma pindureta. Per aumento de cachacis, eu reclamis.</p>

<p>Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus. Sapien in monti palavris qui num significa nadis i pareci latim. M&eacute; faiz elementum girarzis, nisi eros vermeio. Manduma pindureta quium dia nois paga.</p>

<address>&nbsp;</address>
',
                "seats_key"=>"",
                "seats_public_key"=>"",
                "categoria_id"=>12,
                "limite_ingressos_por_pedido"=>3,
                "data"=>"2018-11-29 23:30:30",
                "data_final"=>null,
                "url_landing_page"=>null,
                "dt_primeira_apresentacao"=>"2018-11-29 23:30:30",
                "dt_ultima_apresentacao"=>"2018-12-30 23:30:30",
                "imagem_wide"=>"https://eventicket.s3-sa-east-1.amazonaws.com/imgs/4012-layer-12.jpg",
                "imagem_box"=>"https://imagens.uhuu.com/imgs/9563-card-web-510x310-desfile.png",
                "imagem_mobile"=>null,
                "imagem_totem"=>null,
                "local_id"=>918,
                "local_nome"=>"Expogramado RS",
                "local_cidade"=>"Gramado",
                "local_uf"=>"RS",
                "b_repeticao"=>true,
                "destaque"=>1,
                "nivel_destaque"=>10,
                "b_assento_numerado"=>false,
                "imagem_mapa"=>"https://eventicket.s3-sa-east-1.amazonaws.com/imgs/4019-8999-8599-planta-desfile-1.jpg",
                "dt_fim_vendas_internet"=>"2018-11-30 17:30:30",
                "seo_title"=>"",
                "seo_meta_description"=>"",
                "seo_meta_keywords"=>"",
                "seo_og_title"=>"",
                "seo_og_url"=>null,
                "seo_og_image"=>null,
                "seo_og_description"=>"",
                "pontos_venda"=>"<p>&nbsp;</p>\r\n\r\n<p>Expogramado RS&nbsp;&emsp;<br />\r\nAv. Borges de Medeiros, 4111 - Centro, Gramado - RS, 95670-000<br />\r\nTelefone=> (54)32862002</p>\r\n",
                "ingresso_inicial"=>0.5,
                "repeticao_id"=>9232,
                "url_portal"=>"https://uhuu.com/evento/rs/gramado/grande-desfile-de-natal-3688",
                'valor_ingresso' => 15.50
            ],
            [
                "id" => 4,
                "evento_id"=>1974,
                "evento_nome"=>"Lightwire Theater: Um natal Eletrizante",
                'descricao' => '<p>Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est. Quem manda na minha terra sou euzis! Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. N&atilde;o sou faixa preta cumpadi, sou preto inteiris, inteiris.</p>

<p>Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Si u mundo t&aacute; muito paradis? Toma um m&eacute; que o mundo vai girarzis! Copo furadis &eacute; disculpa de bebadis, arcu quam euismod magna. T&aacute; deprimidis, eu conhe&ccedil;o uma cachacis que pode alegrar sua vidis.</p>

<p>Viva Forevis aptent taciti sociosqu ad litora torquent. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Cevadis im ampola pa arma uma pindureta. Per aumento de cachacis, eu reclamis.</p>

<p>Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus. Sapien in monti palavris qui num significa nadis i pareci latim. M&eacute; faiz elementum girarzis, nisi eros vermeio. Manduma pindureta quium dia nois paga.</p>

<address>&nbsp;</address>
',
                "seats_key"=>"",
                "seats_public_key"=>"",
                "categoria_id"=>12,
                "limite_ingressos_por_pedido"=>100,
                "data"=>"2018-11-29 18:30:00",
                "data_final"=>null,
                "url_landing_page"=>null,
                "dt_primeira_apresentacao"=>"2018-11-29 18:30:00",
                "dt_ultima_apresentacao"=>"2019-01-29 18:30:00",
                "imagem_wide"=>"https://eventicket.s3-sa-east-1.amazonaws.com/imgs/4002-7091-gramado-sem-porshe3.jpg",
                "imagem_box"=>"https://imagens.uhuu.com/imgs/10509-510.JPG",
                "imagem_mobile"=>null,
                "imagem_totem"=>null,
                "local_id"=>918,
                "local_nome"=>"Expogramado RS",
                "local_cidade"=>"Gramado",
                "local_uf"=>"RS",
                "b_repeticao"=>true,
                "destaque"=>1,
                "nivel_destaque"=>20,
                "b_assento_numerado"=>false,
                "imagem_mapa"=>"https://eventicket.s3-sa-east-1.amazonaws.com/imgs/4020-8601-planta-natal-pelo-mundo-2.png",
                "dt_fim_vendas_internet"=>"2018-11-29 17:30:30",
                "seo_title"=>"",
                "seo_meta_description"=>"",
                "seo_meta_keywords"=>"",
                "seo_og_title"=>"",
                "seo_og_url"=>null,
                "seo_og_image"=>null,
                "seo_og_description"=>"",
                "pontos_venda"=>"<p>Expogramado RS&nbsp;&emsp;<br />\r\nAv. Borges de Medeiros, 4111 - Centro, Gramado - RS, 95670-000<br />\r\nTelefone=> (54) 32862002<br />\r\n&nbsp;</p>\r\n",
                "ingresso_inicial"=>10,
                "repeticao_id"=>9214,
                "url_portal"=>"https://uhuu.com/evento/rs/gramado/natal-pelo-mundo-3689",
                'valor_ingresso' => 50.00
            ]
        ]);
    }
}
