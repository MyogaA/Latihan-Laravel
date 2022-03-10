<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tarif;

class TarifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Tarif::create([
            "daya"=> "100",
            "tarifperkwh"=> "200"
        ]);
        $data2 = Tarif::create([
            "daya"=> "200",
            "tarifperkwh"=> "400"
        ]);
        $data3 = Tarif::create([
            "daya"=> "300",
            "tarifperkwh"=> "500"
        ]);
    }
}
