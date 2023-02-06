<?php

namespace Database\Seeders;

use App\Models\Consumo;
use Illuminate\Database\Seeder;

class ConsumoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        /* Non mi va di metterli a mano, quindi inserisco solo le cose fondamentali per fare i calcoli (basandomi sull'excel) e faccio fare tutto al server :D */
        $poteri=[12.5,9.72,3.8,1,1];
        $tipoCons=['basso', 'medio', 'alto'];
        $consumoGPL=[1.25,2,3];
        $counterConsumo = 1;
        
        for($i=0; $i<count($poteri);$i++){
            if($i == 0){
                for($j=0;$j<count($tipoCons); $j++){
                    $consumo = new Consumo();
                    $consumo->combustibile_id = $counterConsumo;
                    $consumo->tipoconsumo = $tipoCons[$j];
                    $consumo->unitaconsumate = $consumoGPL[$j];
                    $consumo->save();
                }
            }else{
                for($j=0;$j<count($tipoCons);$j++){
                    $consumo = new Consumo();
                    $consumo->combustibile_id = $counterConsumo;
                    $consumo->tipoconsumo = $tipoCons[$j];
                    $consumo->unitaconsumate=number_format($consumoGPL[$j]*$poteri[0]/$poteri[$i] , 2,'.','');
                    $consumo->save();
                }
            }
            $counterConsumo++;  
        }
    }
}
