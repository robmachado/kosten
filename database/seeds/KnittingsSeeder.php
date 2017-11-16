<?php

use Illuminate\Database\Seeder;
use App\Models\Knitting;

class KnittingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $knitts = [
            ['cod'=>'M01', 'description' => '','price'=>'2.2'],
            ['cod'=>'M02', 'description' => '','price'=>'3.5'],
            ['cod'=>'M03', 'description' => '','price'=>'1.8'],
            ['cod'=>'M04', 'description' => '','price'=>'3.5'],
            ['cod'=>'M05', 'description' => '','price'=>'5'],
            ['cod'=>'M06', 'description' => '','price'=>'3.9'],
            ['cod'=>'M07', 'description' => '','price'=>'4.1'],
            ['cod'=>'M08', 'description' => '','price'=>'3.2'],
            ['cod'=>'M09', 'description' => '','price'=>'12'],
            ['cod'=>'M10', 'description' => '','price'=>'1.6'],
            ['cod'=>'M11', 'description' => '','price'=>'7'],
            ['cod'=>'M12', 'description' => '','price'=>'3.76'],
            ['cod'=>'M13', 'description' => '','price'=>'7.29'],
            ['cod'=>'M14', 'description' => '','price'=>'4.12'],
            ['cod'=>'M15', 'description' => '','price'=>'10.39'],
            ['cod'=>'M16', 'description' => '','price'=>'10.08']
        ];
        Knitting::truncate();
        foreach ($knitts as $knitt) {
            $kni = new Knitting();
            $kni->cod = $knitt['cod'];
            $kni->price = $knitt['price'];
            $kni->save();
        }
    }
}
