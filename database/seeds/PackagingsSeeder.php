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
        $packs = [
            ['pack' =>'FARDO','description'=>'Fardo de Pano','value'=> '9.0'],
            ['pack' =>'CAIXA','description'=>'Caixa de papelão','value'=> '14.35'],
            ['pack' =>'SACO PLASTICO','description'=>'Saco de Plastico transparente','value'=> '8.56'],
            ['pack' =>'PALETE','description'=>'Palete de madeira certificada, com cada peça embalada em plástico','value'=> '140.22']
        ];
        Packaging::truncate();
        foreach ($packs as $pack) {
            $pa = new Packaging();
            $pa->pack = $pack['pack'];
            $pa->description = $pack['description'];
            $pa->value = $pack['value'];
            $pa->save();
        }
    }
}
