<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventosModel extends Model
{
    /**
     * @var string
     */
    protected $table = 'eventos';

    protected $primaryKey = 'evento_id';
    /**
     * @var array
     */
    protected $fillable = [
        'evento_id',
        'evento_nome',
        'seats_key',
        'descricao',
        'seats_key',
        'seats_public_key',
        'categoria_id',
        'limite_ingressos_por_pedido',
        'data',
        'data_final',
        'url_landing_page',
        'dt_primeira_apresentacao',
        'dt_ultima_apresentacao',
        'imagem_wide',
        'imagem_mobile',
        'imagem_totem',
        'imagem_box',
        'local_id',
        'local_nome',
        'local_cidade',
        'local_uf',
        'b_repeticao',
        'destaque',
        'nivel_destaque',
        'b_assento_numerado',
        'imagem_mapa',
        'dt_fim_vendas_internet',
        'seo_title',
        'seo_meta_description',
        'seo_meta_keywords',
        'seo_og_title',
        'seo_og_url',
        'seo_og_image',
        'seo_og_description',
        'pontos_venda',
        'ingresso_inicial',
        'repeticao_id',
        'url_portal',
        'valor_ingresso'
    ];

}
