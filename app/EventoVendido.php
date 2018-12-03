<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventoVendido extends Model
{
    /**
     * @var string
     */
    protected $table = 'evento_vendido';

    /**
     * @var array
     */
    protected $fillable = [
        'evento_id',
        'user_id',
        'evento_programacao_id',
    ];
}
