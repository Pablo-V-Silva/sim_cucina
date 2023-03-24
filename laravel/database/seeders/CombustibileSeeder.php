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
      ['gpl', '', 12.5, 3, 'KG', 0.24, 0.5, 48,'gas.png'],
      ['metano', '', 9.72, 2, 'M3', 0.21, 0.43, 48, 'methane.png'],
      ['legna', '', 3.8, 0.15, 'KG', 0.04, 0.8, 48, 'logs.png'],
      ['corrente', 'piastra', 1, 0.32, 'KWHe', 0.32, 0.67, 48, 'electric-stove.png'],
      ['corrente', 'induzione', 1, 0.32, 'KWHe', 0.32, 0.35, 92, 'induction-stove.png'],
    ];

    for ($i = 0; $i < count($data); $i++) {
      $combustibile = new Combustibile();
      $combustibile->tipo = $data[$i][0];
      $combustibile->tecnologia = $data[$i][1];
      $combustibile->poterecalorifero = $data[$i][2];
      $combustibile->costounitario = $data[$i][3];
      $combustibile->unitadimisura = $data[$i][4];
      $combustibile->costo1kwhlordo = $data[$i][5];
      $combustibile->costo1kwhnetto = $data[$i][6];
      $combustibile->resaconversione = $data[$i][7];
      $combustibile->immagine = $data[$i][8];
      $combustibile->save();
    }
  }
}
