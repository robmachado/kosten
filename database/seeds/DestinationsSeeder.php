<?php

use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dests = [
            ['destination'=>'SP Industrialização', 'icms'=>0],
            ['destination'=>'SP Consumidor', 'icms'=>0.18],
            ['destination'=>'N/NE', 'icms'=>0.07],
            ['destination'=>'S/SE/CO', 'icms'=>0.12]
        ];
        Destination::truncate();
        foreach ($dests as $dest) {
            $de = new Destination();
            $de->destination = $dest['destination'];
            $de->icms = $dest['icms'];
            $de->save();
        }
    }
}
