<?php

namespace Database\Seeders;

use App\Models\Combustibile;
use Illuminate\Database\Seeder;

class CombustibileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['gpl','',12.5,3,'KG',0.24,0.5,48],
            ['metano','',9.72,2,'M3',0.21,0.43,48],
            ['legna','',3.8,0.2,'KG',0.05,0.11,48],
            ['corrente','piastra',1,0.5,'KWHe',0.5,1.04,48],
            ['corrente','induzione',1,0.5,'KWHe',0.5,0.54,92],
        ];

        for($i=0; $i<count($data);$i++){
            $combustibile = new Combustibile();
            $combustibile->tipo = $data[$i][0];
            $combustibile->tecnologia = $data[$i][1];
            $combustibile->potere_calorifero = $data[$i][2];
            $combustibile->costo_unitario = $data[$i][3];
            $combustibile->unita_di_misura = $data[$i][4];
            $combustibile->costo_1kwh_lordo = $data[$i][5];
            $combustibile->costo_1kwh_netto = $data[$i][6];
            $combustibile->resa_conversione = $data[$i][7];
            $combustibile->save();
        }
    }
}
