<?php

use Illuminate\Database\Seeder;
use App\Models\Packaging;

class PackagingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $q1 = (float) 1/15;// 15 kg peso médio por peça
        $q2 = (float) 1/20;// 20 kg por caixa
        $packs = [
            ['pack' =>'FARDO','description'=>'Fardo de Pano + saco plástico + tubete + etiqueta + fita','value'=> 11.50, 'quota'=>$q1],
            ['pack' =>'CAIXA','description'=>'Caixa de papelão + etiqueta + fita','value'=> 14.35, 'quota'=>$q2],
            ['pack' =>'SACO_PLASTICO','description'=>'Saco de Plastico transparente + tubete + etiqueta + fita','value'=> 2.21, 'quota'=>$q1]
        ];
        Packaging::truncate();
        foreach ($packs as $pack) {
            $pa = new Packaging();
            $pa->pack = $pack['pack'];
            $pa->description = $pack['description'];
            $pa->value = $pack['value'];
            $pa->quota = $pack['quota'];
            $pa->save();
        }
    }
}
