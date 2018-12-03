<?php

use Illuminate\Database\Seeder;

class EventosProgramacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evento_programacao')->delete();
        DB::table('evento_programacao')->insert([
            [
                "evento_id"=>2,
                "data_programacao" => '2018-3-12 18:30:30',
                "hora_programacao" => '18:30',
                "qtd_ingressos" => '30',
            ],
            [
                "evento_id"=>2,
                "data_programacao" => "2018-12-27 18:30:30",
                "hora_programacao" => '18:30',
                "qtd_ingressos" => '30',
            ],
            [
                "evento_id"=>1,
                "data_programacao" => '2018-12-27 18:30:30',
                "hora_programacao" => '18:30',
                "qtd_ingressos" => '30',
            ],
            [
                "evento_id"=>3,
                "data_programacao" => '2018-12-27 18:30:30',
                "hora_programacao" => '18:30',
                "qtd_ingressos" => '30',
            ],
            [
                "evento_id"=>4,
                "data_programacao" => '2018-12-27 18:30:30',
                "hora_programacao" => '18:30',
                "qtd_ingressos" => '30',
            ]
        ]);
    }
}
