<?php

use Illuminate\Database\Seeder;
use App\Models\Dyeing;

class DyeingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dyes = [
            ['class' =>'COLORIDO', 'value'=> '8.8'],
            ['class' =>'PURGADO', 'value'=> '4.11'],
            ['class' =>'BRANCO', 'value'=> '6.5'],
            ['class' =>'CRU', 'value'=> '0'],
            ['class' =>'ESPECIAL', 'value'=> '11.2']
        ];
        Dyeing::truncate();
        $piscofinscomplement = 0.9075;
        foreach ($dyes as $dye) {
            $dy = new Dyeing();
            $dy->class = $dye['class'];
            $dy->value = $dye['value']*$piscofinscomplement;
            $dy->save();
        }
    }
}
