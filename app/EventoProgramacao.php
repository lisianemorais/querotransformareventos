<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EventosModel;

class EventoProgramacao extends Model
{
    /**
     * @var string
     */
    protected $table = 'evento_programacao';

    /**
     * @var array
     */
    protected $fillable = [
        'evento_id',
        'data_programacao',
        'hora_programacao',
        'qtd_ingressos',
    ];

    public function eventos()
    {
        $t = $this->belongsTo(EventosModel::class);

        return $t;
    }
}
