<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\API;

class Anime extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://api.aniapi.com/v1/random/anime/30/false');
        $resultado = json_decode($response->getBody()->getContents(), true);
        $Animes = [];
        foreach ($resultado['data'] as $anime){
            

            DB::table('nombress')->insert ([
                'Titulo' => $anime['titles']['rj'],
                'imagen' => $anime['cover_image'],
                'descripcion' => $anime['descriptions']['en'],
                'fecha_inicio' => $anime['start_date'], 
                'fecha_final' => $anime['end_date'],
                'periodo_temporada' => $anime['season_period'],
                'conteo_episodios' => $anime['episodes_count'],
                'genero' => implode($anime['genres'])
                
                
            ]);


        }
    }   
}