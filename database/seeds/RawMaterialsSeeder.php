<?php

use Illuminate\Database\Seeder;
use App\Models\RawMaterial;

class RawMaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $raws = [
            ['reference'=>'PA1X200/68T','value'=>'21.9','valueicms'=>'25.24','provider_cod'=>'','description'=>'Poliamida','basecomponent'=>'PA','cables'=>'1','dtex'=>'200','filaments'=>'68','finishing'=>'Texturizado'],
            ['reference'=>'PA1X200/96M','value'=>'23.05','valueicms'=>'26.56','provider_cod'=>'','description'=>'Poliamida','basecomponent'=>'PA','cables'=>'1','dtex'=>'200','filaments'=>'96','finishing'=>'Mescla'],
            ['reference'=>'PA1X200/98M','value'=>'20.77','valueicms'=>'26.56','provider_cod'=>'','description'=>'Poliamida','basecomponent'=>'PA','cables'=>'1','dtex'=>'200','filaments'=>'98','finishing'=>'Mescla'],
            ['reference'=>'PA1X42/13L','value'=>'21.27','valueicms'=>'24.4','provider_cod'=>'','description'=>'Poliamida','basecomponent'=>'PA','cables'=>'1','dtex'=>'42','filaments'=>'13','finishing'=>'Liso'],
            ['reference'=>'PA1X60/60T','value'=>'23.99','valueicms'=>'27.65','provider_cod'=>'','description'=>'Poliamida','basecomponent'=>'PA','cables'=>'1','dtex'=>'60','filaments'=>'60','finishing'=>'Texturizado'],
            ['reference'=>'PA1X70/68T','value'=>'18','valueicms'=>'18.88','provider_cod'=>'','description'=>'Poliamida','basecomponent'=>'PA','cables'=>'1','dtex'=>'70','filaments'=>'68','finishing'=>'Texturizado'],
            ['reference'=>'PA1X80/60L','value'=>'41.57','valueicms'=>'47.89','provider_cod'=>'','description'=>'Poliamida','basecomponent'=>'PA','cables'=>'1','dtex'=>'80','filaments'=>'60','finishing'=>'Liso'],
            ['reference'=>'PA1X80/68L','value'=>'19.62','valueicms'=>'22.61','provider_cod'=>'','description'=>'Poliamida','basecomponent'=>'PA','cables'=>'1','dtex'=>'80','filaments'=>'68','finishing'=>'Liso'],
            ['reference'=>'PA2X70/68T','value'=>'18','valueicms'=>'18.88','provider_cod'=>'','description'=>'Poliamida','basecomponent'=>'PA','cables'=>'2','dtex'=>'70','filaments'=>'68','finishing'=>'Texturizado'],
            ['reference'=>'PA3X78/23T','value'=>'22.54','valueicms'=>'25.96','provider_cod'=>'','description'=>'Poliamida','basecomponent'=>'PA','cables'=>'3','dtex'=>'78','filaments'=>'23','finishing'=>'Texturizado'],
            ['reference'=>'PA661X200/68T','value'=>'21.9','valueicms'=>'25.24','provider_cod'=>'','description'=>'Poliamida 6.6','basecomponent'=>'PA6.6','cables'=>'1','dtex'=>'200','filaments'=>'68','finishing'=>'Texturizado'],
            ['reference'=>'PA661X200/96T','value'=>'21.9','valueicms'=>'25.44','provider_cod'=>'','description'=>'Poliamida 6.6','basecomponent'=>'PA6.6','cables'=>'1','dtex'=>'200','filaments'=>'96','finishing'=>'Texturizado'],
            ['reference'=>'PA661X40/13L','value'=>'21.21','valueicms'=>'24.4','provider_cod'=>'','description'=>'Poliamida 6.6','basecomponent'=>'PA6.6','cables'=>'1','dtex'=>'40','filaments'=>'13','finishing'=>'Liso'],
            ['reference'=>'PA661X42/13T','value'=>'21.51','valueicms'=>'24.78','provider_cod'=>'','description'=>'Poliamida 6.6','basecomponent'=>'PA6.6','cables'=>'1','dtex'=>'42','filaments'=>'13','finishing'=>'Texturizado'],
            ['reference'=>'PA661X60/60T','value'=>'23.99','valueicms'=>'27.64','provider_cod'=>'','description'=>'Poliamida 6.6','basecomponent'=>'PA6.6','cables'=>'1','dtex'=>'60','filaments'=>'60','finishing'=>'Texturizado'],
            ['reference'=>'PA661X78/23T','value'=>'18.52','valueicms'=>'21.34','provider_cod'=>'','description'=>'Poliamida 6.6','basecomponent'=>'PA6.6','cables'=>'1','dtex'=>'78','filaments'=>'23','finishing'=>'Texturizado'],
            ['reference'=>'PA661X80/68B','value'=>'22.53','valueicms'=>'25.96','provider_cod'=>'','description'=>'Poliamida 6.6','basecomponent'=>'PA6.6','cables'=>'1','dtex'=>'80','filaments'=>'68','finishing'=>'Black'],
            ['reference'=>'PA661X80/68M','value'=>'32.04','valueicms'=>'36.96','provider_cod'=>'','description'=>'Poliamida 6.6','basecomponent'=>'PA6.6','cables'=>'1','dtex'=>'80','filaments'=>'68','finishing'=>'Mescla'],
            ['reference'=>'PA661X80/68MB','value'=>'32.04','valueicms'=>'36.96','provider_cod'=>'','description'=>'Poliamida 6.6','basecomponent'=>'PA6.6','cables'=>'1','dtex'=>'80','filaments'=>'68','finishing'=>'MesclaBlack'],
            ['reference'=>'PA661X80/68T','value'=>'21.12','valueicms'=>'24.33','provider_cod'=>'','description'=>'Poliamida 6.6','basecomponent'=>'PA6.6','cables'=>'1','dtex'=>'80','filaments'=>'68','finishing'=>'Texturizado'],
            ['reference'=>'PA662X60/60T','value'=>'24','valueicms'=>'27.64','provider_cod'=>'','description'=>'Poliamida 6.6','basecomponent'=>'PA6.6','cables'=>'2','dtex'=>'60','filaments'=>'60','finishing'=>'Texturizado'],
            ['reference'=>'PA662X78/48T','value'=>'19.66','valueicms'=>'22.65','provider_cod'=>'','description'=>'Poliamida 6.6','basecomponent'=>'PA6.6','cables'=>'2','dtex'=>'78','filaments'=>'48','finishing'=>'Texturizado'],
            ['reference'=>'PA662X80/68T','value'=>'21.11','valueicms'=>'24.33','provider_cod'=>'','description'=>'Poliamida 6.6','basecomponent'=>'PA6.6','cables'=>'2','dtex'=>'80','filaments'=>'68','finishing'=>'Texturizado'],
            ['reference'=>'PAPES1X110T','value'=>'23.99','valueicms'=>'27.64','provider_cod'=>'','description'=>'Poliamida+Poliester','basecomponent'=>'PAPES','cables'=>'1','dtex'=>'110','filaments'=>'0','finishing'=>'Texturizado'],
            ['reference'=>'PES1X150/144T','value'=>'6.7','valueicms'=>'7.08','provider_cod'=>'','description'=>'Poliester','basecomponent'=>'PES','cables'=>'1','dtex'=>'150','filaments'=>'144','finishing'=>'Liso'],
            ['reference'=>'PES1X50/13L','value'=>'7.7','valueicms'=>'8.08','provider_cod'=>'','description'=>'Poliester','basecomponent'=>'PES','cables'=>'1','dtex'=>'50','filaments'=>'13','finishing'=>'Liso'],
            ['reference'=>'PES1X50/72T','value'=>'9.98','valueicms'=>'10.44','provider_cod'=>'','description'=>'Poliester','basecomponent'=>'PES','cables'=>'1','dtex'=>'50','filaments'=>'72','finishing'=>'Texturizado'],
            ['reference'=>'PES1X70/36B','value'=>'7.2','valueicms'=>'7.53','provider_cod'=>'','description'=>'Poliester','basecomponent'=>'PES','cables'=>'1','dtex'=>'70','filaments'=>'36','finishing'=>'Black'],
            ['reference'=>'PES1X70/36L','value'=>'7.2','valueicms'=>'7.53','provider_cod'=>'','description'=>'Poliester','basecomponent'=>'PES','cables'=>'1','dtex'=>'70','filaments'=>'36','finishing'=>'Liso'],
            ['reference'=>'PES1X70/48','value'=>'15','valueicms'=>'15','provider_cod'=>'MP não usado ???','description'=>'Poliester','basecomponent'=>'PES','cables'=>'1','dtex'=>'70','filaments'=>'48','finishing'=>'???'],
            ['reference'=>'PES1X75/36T','value'=>'7.2','valueicms'=>'7.53','provider_cod'=>'','description'=>'Poliester','basecomponent'=>'PES','cables'=>'1','dtex'=>'75','filaments'=>'36','finishing'=>'Texturizado'],
            ['reference'=>'PES1X75/72T','value'=>'7.6','valueicms'=>'7.99','provider_cod'=>'','description'=>'Poliester','basecomponent'=>'PES','cables'=>'1','dtex'=>'75','filaments'=>'72','finishing'=>'Texturizado'],
            ['reference'=>'PUE1X20','value'=>'25.61','valueicms'=>'29.5','provider_cod'=>'','description'=>'Elastano','basecomponent'=>'PUE','cables'=>'1','dtex'=>'20','filaments'=>'0','finishing'=>' ---'],
            ['reference'=>'PUE1X40','value'=>'25.45','valueicms'=>'29.53','provider_cod'=>'','description'=>'Elastano','basecomponent'=>'PUE','cables'=>'1','dtex'=>'40','filaments'=>'0','finishing'=>' ---'],
            ['reference'=>'PUE1X70','value'=>'25.54','valueicms'=>'29.32','provider_cod'=>'','description'=>'Elastano','basecomponent'=>'PUE','cables'=>'1','dtex'=>'70','filaments'=>'0','finishing'=>' ---'],
            ['reference'=>'CO12X1/OE','value'=>'6.3','valueicms'=>'7.13','provider_cod'=>'','description'=>'Algodão','basecomponent'=>'CO','cables'=>'1','dtex'=>'0','filaments'=>'0','finishing'=>'OpenEnd'],
            ['reference'=>'CO16X1/OE','value'=>'8.03','valueicms'=>'9.6','provider_cod'=>'','description'=>'Algodão','basecomponent'=>'CO','cables'=>'1','dtex'=>'0','filaments'=>'0','finishing'=>'OpenEnd'],
            ['reference'=>'CO6X1/OE','value'=>'6','valueicms'=>'6.79','provider_cod'=>'','description'=>'Algodão','basecomponent'=>'CO','cables'=>'1','dtex'=>'0','filaments'=>'0','finishing'=>'OpenEnd'],
            ['reference'=>'COPES30X1/VORT','value'=>'8.74','valueicms'=>'10.6','provider_cod'=>'','description'=>'Algodão+Poliester','basecomponent'=>'COPES','cables'=>'1','dtex'=>'0','filaments'=>'0','finishing'=>'PES/CO TRAMA'],
            ['reference'=>'PA662X80/60TE','value'=>'38.4','valueicms'=>'47.9','provider_cod'=>'','description'=>'Poliamida 6.6','basecomponent'=>'PA6.6','cables'=>'2','dtex'=>'80','filaments'=>'60','finishing'=>'Texturizado Emana'],
            ['reference'=>'PES1X150/48T','value'=>'6.28','valueicms'=>'6.57','provider_cod'=>'','description'=>'Poliester','basecomponent'=>'PES','cables'=>'1','dtex'=>'150','filaments'=>'48','finishing'=>'Texturizado'],
            ['reference'=>'PES1X75/36T/URDUME','value'=>'7.05','valueicms'=>'7.38','provider_cod'=>'','description'=>'Poliester','basecomponent'=>'PES','cables'=>'1','dtex'=>'75','filaments'=>'36','finishing'=>'Texturizado URDUME']
        ];
        RawMaterial::truncate();
        foreach ($raws as $raw) {
            $ra = new RawMaterial();
            $ra->reference = $raw['reference'];
            $ra->value = $raw['value'];
            $ra->valueicms = $raw['valueicms'];
            $ra->provider_cod = $raw['provider_cod'];
            $ra->description = trim($raw['description']);
            $ra->basecomponent = $raw['basecomponent'];
            $ra->cables = $raw['cables'];
            $ra->dtex = $raw['dtex'];
            $ra->filaments = $raw['filaments'];
            $ra->finishing = trim($raw['finishing']);
            $ra->save();
        }
    }
}
