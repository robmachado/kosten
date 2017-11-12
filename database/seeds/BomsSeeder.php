<?php

use Illuminate\Database\Seeder;
use App\Models\Bom;

class BomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $boms = [
            ['article'=>'2103CDB03','description'=>'BIELASTICO PURGADO','composition'=>'100%PA 6.6','knittings_cod'=>'M01','raw1'=>'PA661X42/13T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2116BGB00','description'=>'POLICHAREL','composition'=>'100%PES','knittings_cod'=>'M01','raw1'=>'PES1X75/36T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2324BCB01','description'=>'MULTICREPE','composition'=>'100%PA 6.6','knittings_cod'=>'M01','raw1'=>'PA661X80/68T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2330BCB00','description'=>'FITNESS','composition'=>'96%PA 6.6  TEXT 2/78/48 + 4% PA 6.6 1/42/13','knittings_cod'=>'M01','raw1'=>'PA662X78/48T','raw2'=>'PA1X42/13L','raw3'=>'','perc1'=>'0.96','perc2'=>'0.04','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2342BCB00','description'=>'STICK LANNY ','composition'=>'90%PA 6.6 + 10%PUE','knittings_cod'=>'M01','raw1'=>'PA662X80/68T','raw2'=>'PUE1X40','raw3'=>'','perc1'=>'0.9','perc2'=>'0.1','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2354BCB01','description'=>'MULTICREPE POLIESTER','composition'=>'100%PES ','knittings_cod'=>'M01','raw1'=>'PES1X75/72T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2355BGB00','description'=>'MULTIELASTIC','composition'=>'93%PES + 7%PUE','knittings_cod'=>'M01','raw1'=>'PES1X75/72T','raw2'=>'PUE1X20','raw3'=>'','perc1'=>'0.93','perc2'=>'0.07','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2370BCB00','description'=>'MULTIPICK','composition'=>'100%PA 6.6','knittings_cod'=>'M01','raw1'=>'PA662X80/68T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2374BCB02','description'=>'BALIZ','composition'=>'100% PA.6.6','knittings_cod'=>'M04','raw1'=>'PA1X60/60T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2375BCB08','description'=>'POWER 70 ','composition'=>'88%PA 6 6 + 12%PUE','knittings_cod'=>'M01','raw1'=>'PA661X200/96T','raw2'=>'PUE1X70','raw3'=>'','perc1'=>'0.88','perc2'=>'0.12','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2377CCB00','description'=>'MESCLA BERNAL ','composition'=>'96%PA 6 + 4%PUE','knittings_cod'=>'M01','raw1'=>'PA1X200/96M','raw2'=>'PUE1X40','raw3'=>'','perc1'=>'0.96','perc2'=>'0.04','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2388BCB00','description'=>'COOPER DRY ','composition'=>'100%PA 6.6','knittings_cod'=>'M01','raw1'=>'PA661X80/68T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2390BCB00','description'=>'AIR MAX','composition'=>'88%PA 6.6 + 8% PUE + 4%PA 6.6 42/13','knittings_cod'=>'M01','raw1'=>'PA662X80/68T','raw2'=>'PUE1X40','raw3'=>'PA661X40/13L','perc1'=>'0.88','perc2'=>'0.08','perc3'=>'0.04','losses'=>'6.5'],
            ['article'=>'2392BCB00','description'=>'MESCLA 40','composition'=>'92%PA 6 + 8% PUE','knittings_cod'=>'M01','raw1'=>'PA1X200/96M','raw2'=>'PUE1X40','raw3'=>'','perc1'=>'0.92','perc2'=>'0.08','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2408BCB00','description'=>'FLUID','composition'=>'96%PA 6.6 TEXT + 4%PA 6.6 1/42/13','knittings_cod'=>'M01','raw1'=>'PA662X80/68T','raw2'=>'PA1X42/13L','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2410BCB00','description'=>'AIR SHOX ','composition'=>'88%PA 6.6 + 12%PUE','knittings_cod'=>'M01','raw1'=>'PA662X80/68T','raw2'=>'PUE1X70','raw3'=>'','perc1'=>'0.88','perc2'=>'0.12','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2410BCB01','description'=>'PERFETC MAGMA','composition'=>'88%PA EMANA TEXT+ 12 %PUE 70','knittings_cod'=>'M02','raw1'=>'PA662X80/60TE','raw2'=>'PUE1X70','raw3'=>'','perc1'=>'0.88','perc2'=>'0.12','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2414BCB01','description'=>'SHINE TRI ','composition'=>'97%PA 6.6 + 03%PUE','knittings_cod'=>'M07','raw1'=>'PA661X60/60T','raw2'=>'PUE1X20','raw3'=>'','perc1'=>'0.97','perc2'=>'0.03','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2415BCB00','description'=>'AIR COOL','composition'=>'100%PA 6.6','knittings_cod'=>'M01','raw1'=>'PA661X80/68T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2420BCB03','description'=>'MULTICREPE ICE','composition'=>'100%PA 6.6','knittings_cod'=>'M01','raw1'=>'PA661X80/68T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2434BCB00','description'=>'MOLETON PA 40','composition'=>'92%PA 6.6 + 8%PUE','knittings_cod'=>'M01','raw1'=>'PA662X80/68T','raw2'=>'PUE1X40','raw3'=>'','perc1'=>'0.92','perc2'=>'0.08','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2455CCB00','description'=>'FIT MESCLA','composition'=>'97%PA 6 + 03%PA 6','knittings_cod'=>'M01','raw1'=>'PA1X200/98M','raw2'=>'PA1X42/13L','raw3'=>'','perc1'=>'0.97','perc2'=>'0.03','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2458CCB00','description'=>'MESCLA FLUID','composition'=>'92%PA 6 + 8% PA 6','knittings_cod'=>'M01','raw1'=>'PA1X200/98M','raw2'=>'PA1X42/13L','raw3'=>'','perc1'=>'0.92','perc2'=>'0.08','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2467BCB00','description'=>'MEIA MALHA KLEIN  ','composition'=>'90%PA 6.6 TEXT + 3%PA 6.6 LISO + 7%PUE','knittings_cod'=>'M01','raw1'=>'PA662X80/68T','raw2'=>'PA1X42/13L','raw3'=>'PUE1X20','perc1'=>'0.9','perc2'=>'0.03','perc3'=>'0.07','losses'=>'6.5'],
            ['article'=>'2470BCB00','description'=>'DELFOS  ','composition'=>'100%PA 6.6','knittings_cod'=>'M01','raw1'=>'PA661X80/68T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2471BCB00','description'=>'STRECH LIGHT ','composition'=>'93%PES + 7%PUE','knittings_cod'=>'M06','raw1'=>'PES1X75/72T','raw2'=>'PUE1X20','raw3'=>'','perc1'=>'0.93','perc2'=>'0.07','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2473BCB81','description'=>'EXTRIME TOUCH 40','composition'=>'85% PA 6 + 15%PUE','knittings_cod'=>'M06','raw1'=>'PA1X80/68L','raw2'=>'PUE1X40','raw3'=>'','perc1'=>'0.85','perc2'=>'0.15','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2474BCB00','description'=>'UNDERWEAR','composition'=>'100%PA 6.6','knittings_cod'=>'M01','raw1'=>'PA661X78/23T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2480BCB00','description'=>'PUNHO','composition'=>'97% PA 3X78/23 TEXT 3% PUE 200','knittings_cod'=>'M01','raw1'=>'PA3X78/23T','raw2'=>'PUE1X20','raw3'=>'','perc1'=>'0.97','perc2'=>'0.03','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2492BCB00','description'=>'FAVO  ','composition'=>'100%PA 6.6','knittings_cod'=>'M01','raw1'=>'PA662X80/68T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2502BCB01','description'=>'MULTI  ICE MESCLA','composition'=>'100%PA 6.6','knittings_cod'=>'M01','raw1'=>'PA661X80/68M','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2508BCB01','description'=>' EFECTOS','composition'=>'90%PA  EMANA L+ 10% PUE 20','knittings_cod'=>'M06','raw1'=>'PA1X80/60L','raw2'=>'PUE1X20','raw3'=>'','perc1'=>'0.9','perc2'=>'0.1','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2517BCB01','description'=>'DELFOS MESCLA','composition'=>'100%PA 6.6','knittings_cod'=>'M01','raw1'=>'PA661X80/68M','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2533BCB00','description'=>'SOLUTIO ','composition'=>'100%PA 6.6','knittings_cod'=>'M01','raw1'=>'PA661X80/68T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2545BCB00','description'=>'STRECH  ','composition'=>'100%PES','knittings_cod'=>'M10','raw1'=>'PES1X75/36T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2547BCB00','description'=>'SUPREMO ','composition'=>'85%PES + 15%PUE','knittings_cod'=>'M03','raw1'=>'PES1X150/144T','raw2'=>'PUE1X70','raw3'=>'','perc1'=>'0.85','perc2'=>'0.15','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2547BCB01','description'=>'SUPREMO LIGHT ','composition'=>'90%PES + 10%PUE','knittings_cod'=>'M03','raw1'=>'PES1X150/144T','raw2'=>'PUE1X70','raw3'=>'','perc1'=>'0.9','perc2'=>'0.1','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2547BJB01','description'=>'SUPREMO LIGHT PELETIZADO','composition'=>'90%PES + 10%PUE','knittings_cod'=>'M03','raw1'=>'PES1X150/144T','raw2'=>'PUE1X70','raw3'=>'','perc1'=>'0.9','perc2'=>'0.1','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2548BCB00','description'=>'CRISTAL ','composition'=>'92%PES TEXT + 10%PES LISO + 8%PUE','knittings_cod'=>'M01','raw1'=>'PES1X150/144T','raw2'=>'PES1X50/13L','raw3'=>'PUE1X20','perc1'=>'0.92','perc2'=>'0.1','perc3'=>'0.08','losses'=>'6.5'],
            ['article'=>'2550BCB00','description'=>'MARITIMO ','composition'=>'95,5%PES TEXT + 4,5%PES LISO','knittings_cod'=>'M01','raw1'=>'PES1X150/144T','raw2'=>'PES1X50/13L','raw3'=>'','perc1'=>'0.955','perc2'=>'0.045','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2552BCB00','description'=>'MOLETON POLY','composition'=>'92%PES + 8%PUE','knittings_cod'=>'M01','raw1'=>'PES1X150/144T','raw2'=>'PUE1X70','raw3'=>'','perc1'=>'0.92','perc2'=>'0.08','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2560BCB00','description'=>'COOPER DRY LARGE','composition'=>'100%PA 6.6','knittings_cod'=>'M01','raw1'=>'PA661X80/68T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2565BCB00','description'=>'ANGRA  ','composition'=>'100%PA 6.6','knittings_cod'=>'M01','raw1'=>'PA662X80/68T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2567BCB00','description'=>'DELFOS DEFENSE','composition'=>'100%PA 6.6','knittings_cod'=>'M01','raw1'=>'PA661X80/68B','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2571BCB00','description'=>'SOLUTIO DEFENSE','composition'=>'100%PA 6.6','knittings_cod'=>'M01','raw1'=>'PA661X80/68B','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2576BCB00','description'=>'SKIN ','composition'=>'100%PES','knittings_cod'=>'M08','raw1'=>'PES1X50/72T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2584BCB01','description'=>'SOLUTIO HEAVY   ','composition'=>'100%PA 6.6','knittings_cod'=>'M01','raw1'=>'PA662X60/60T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2584BCB02','description'=>'SOLUTIO HEAVY C/ LYCRA   ','composition'=>'97%PA 6.6 + 03%PUE','knittings_cod'=>'M01','raw1'=>'PA662X60/60T','raw2'=>'PUE1X20','raw3'=>'','perc1'=>'0.97','perc2'=>'0.03','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2598BDB00','description'=>'MOVE','composition'=>'100%PES','knittings_cod'=>'M01','raw1'=>'PES1X75/72T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2607BCB81','description'=>'DRAPEADO TINTO','composition'=>'90%PA 6 + 10%PUE','knittings_cod'=>'M01','raw1'=>'PA662X80/68T','raw2'=>'PUE1X40','raw3'=>'','perc1'=>'0.9','perc2'=>'0.1','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2620BCB00','description'=>'ICE ECO SOUL','composition'=>'100%PA 6.6','knittings_cod'=>'M01','raw1'=>'PA661X80/68T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2622BCB00','description'=>'SOLUTIO ECO SOUL','composition'=>'100%PA 6.6','knittings_cod'=>'M01','raw1'=>'PA661X80/68T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2623BCB00','description'=>'DELPHOS ECO SOUL','composition'=>'100%PA 6.6','knittings_cod'=>'M01','raw1'=>'PA661X80/68T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2626BCB00','description'=>'LUXOR','composition'=>'95%PA 6.6 + 5%PUE','knittings_cod'=>'M01','raw1'=>'PA661X200/68T','raw2'=>'PA1X42/13L','raw3'=>'PUE1X20','perc1'=>'0.82','perc2'=>'0.13','perc3'=>'0.05','losses'=>'6.5'],
            ['article'=>'2630BCB01','description'=>'FAVO LIGHT MESCLA ','composition'=>'100% PA 6','knittings_cod'=>'M01','raw1'=>'PA1X200/98M','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2631BCB01','description'=>'MULTI ICE C/ LYCRA ','composition'=>'96% PA 6.6 + 4%PUE','knittings_cod'=>'M01','raw1'=>'PA661X80/68T','raw2'=>'PUE1X20','raw3'=>'','perc1'=>'0.96','perc2'=>'0.04','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2634BCB00','description'=>'MULTI  ICE MESCLA C/ LYCRA','composition'=>'95%PA 6.6 + 5%PUE','knittings_cod'=>'M01','raw1'=>'PA661X80/68M','raw2'=>'PUE1X20','raw3'=>'','perc1'=>'0.97','perc2'=>'0.03','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2642BCB00','description'=>'MICRO ICE ','composition'=>'100%PA 6','knittings_cod'=>'M01','raw1'=>'PA1X70/68T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2644BCB00','description'=>'MICRO SOLUTIO ','composition'=>'100%PA 6','knittings_cod'=>'M01','raw1'=>'PA1X70/68T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2645BCB00','description'=>'MICRO COOPER','composition'=>'100%PA 6','knittings_cod'=>'M01','raw1'=>'PA1X70/68T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2647BCB00','description'=>'MICRO DELFOS','composition'=>'100%PA 6.6','knittings_cod'=>'M01','raw1'=>'PA1X70/68T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2651CBB01','description'=>'SPLASH MESCLA','composition'=>'93%PA 6.6 MESCLA + 07%PUE 20','knittings_cod'=>'M01','raw1'=>'PA661X80/68M','raw2'=>'PUE1X20','raw3'=>'','perc1'=>'0.93','perc2'=>'0.07','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2652BCB00','description'=>'DELFOS PLUS','composition'=>'97%PA 6.6 + 3%PUE','knittings_cod'=>'M01','raw1'=>'PA1X70/68T','raw2'=>'PUE1X20','raw3'=>'','perc1'=>'0.97','perc2'=>'0.03','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2655BCB00','description'=>'MOLETON MESCLA VANIZE','composition'=>'78%PA 6 MESCLA + 22% PA 6.6','knittings_cod'=>'M01','raw1'=>'PA1X200/96M','raw2'=>'PA662X80/68T','raw3'=>'','perc1'=>'0.78','perc2'=>'0.22','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2657BCB00','description'=>'MOLETON MESCLA PLUS','composition'=>'73%PA 6 MESCLA + 21% PA 6.6 + 06%PUE 40','knittings_cod'=>'M01','raw1'=>'PA1X200/96M','raw2'=>'PA662X80/68T','raw3'=>'PUE1X40','perc1'=>'0.73','perc2'=>'0.21','perc3'=>'0.06','losses'=>'6.5'],
            ['article'=>'2662BCB00','description'=>'MICRO AIR SHOX ','composition'=>'88%PA 6 + 12%PUE','knittings_cod'=>'M01','raw1'=>'PA2X70/68T','raw2'=>'PUE1X70','raw3'=>'','perc1'=>'0.88','perc2'=>'0.12','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2665BCB00','description'=>'DELFOS 80 MESCLA BLACK','composition'=>'100%PA 6.6 (PA TEXT 80/68 MESCLA DARK)','knittings_cod'=>'M01','raw1'=>'PA661X80/68MB','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2668BCB00','description'=>'ANGRA MESCLA','composition'=>'100% PA 6 MESCLA','knittings_cod'=>'M01','raw1'=>'PA1X200/96M','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2674BCB00','description'=>'MICRO POWER 70','composition'=>'88%PA6 + 12%PUE','knittings_cod'=>'M01','raw1'=>'PA1X200/68T','raw2'=>'PUE1X70','raw3'=>'','perc1'=>'0.88','perc2'=>'0.12','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2679BCB00','description'=>'BODRUM CREPE','composition'=>'50% PES + 50% PA 6','knittings_cod'=>'M01','raw1'=>'PAPES1X110T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2680BCB00','description'=>'BODRUM','composition'=>'50%PA 6.6 + 50%PES','knittings_cod'=>'M01','raw1'=>'PAPES1X110T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2681BCB00','description'=>'FLUID BODRUM','composition'=>'55%PA 6.6 + 45%PES','knittings_cod'=>'M01','raw1'=>'PAPES1X110T','raw2'=>'PA1X42/13L','raw3'=>'','perc1'=>'0.95','perc2'=>'0.05','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2682BCB00','description'=>'DELFOS LIST MESCLA','composition'=>'70% PA 6.6 + 30%PA 6.6 MESCLA','knittings_cod'=>'M01','raw1'=>'PA661X80/68T','raw2'=>'PA661X80/68M','raw3'=>'','perc1'=>'0.7','perc2'=>'0.3','perc3'=>'','losses'=>'6.5'],
            ['article'=>'2688BCB00','description'=>'MICRO DRY ACTION','composition'=>'100%PA 6','knittings_cod'=>'M01','raw1'=>'PA1X70/68T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'3044BDD06','description'=>'VIES','composition'=>'100%PES ','knittings_cod'=>'M12','raw1'=>'PES1X70/36L','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'3140CGD00','description'=>'VIES DE MONET','composition'=>'100% PES','knittings_cod'=>'M12','raw1'=>'PES1X70/36L','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'3220AAA00','description'=>'TULESTAR','composition'=>'100%PES ','knittings_cod'=>'M11','raw1'=>'PES1X70/36B','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'3244BCB00','description'=>'ELASTIC TULE','composition'=>'100%PES','knittings_cod'=>'M09','raw1'=>'PES1X70/36L','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'3249BMB00','description'=>'CREFLAN','composition'=>'100%PES','knittings_cod'=>'M12','raw1'=>'PES1X70/36L','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'3386BCB00','description'=>'VERSATILE','composition'=>'100%PA 6.6','knittings_cod'=>'M12','raw1'=>'PA662X78/48T','raw2'=>'','raw3'=>'','perc1'=>'1','perc2'=>'','perc3'=>'','losses'=>'6.5'],
            ['article'=>'4118DDB00','description'=>'CRETONI 70','composition'=>'70%CO + 30%PES','knittings_cod'=>'M13','raw1'=>'CO16X1/OE','raw2'=>'PES1X75/36T/URDUME','raw3'=>'','perc1'=>'0.7','perc2'=>'0.3','perc3'=>'','losses'=>'6.5'],
            ['article'=>'4162AAA03','description'=>'TELA PET','composition'=>'100%CO','knittings_cod'=>'M14','raw1'=>'CO6X1/OE','raw2'=>'CO12X1/OE','raw3'=>'','perc1'=>'0.5','perc2'=>'0.5','perc3'=>'','losses'=>'6.5'],
            ['article'=>'4182CDBX0','description'=>'TELA 8922','composition'=>'58%PES + 42%CO','knittings_cod'=>'M15','raw1'=>'PES1X150/48/TXT','raw2'=>'COPES30X1/VORT','raw3'=>'','perc1'=>'0.58','perc2'=>'0.42','perc3'=>'','losses'=>'6.5'],
            ['article'=>'4118DDB01','description'=>'CRETONI 90','composition'=>'70%CO + 30%PES','knittings_cod'=>'M16','raw1'=>'CO16X1/OE','raw2'=>'PES1X75/36T/URDUME','raw3'=>'','perc1'=>'0.7','perc2'=>'0.3','perc3'=>'','losses'=>'6.5'],
        ];
        Bom::truncate();
        foreach ($boms as $bom) {
            $bo = new Bom();
            $bo->article = $bom['article'];
            $bo->description = trim($bom['description']);
            $bo->composition = trim($bom['composition']);
            $bo->knittings_cod = trim($bom['knittings_cod']);
            $bo->raw1 = trim($bom['raw1']);
            $bo->raw2 = trim($bom['raw2']);
            $bo->raw3 = trim($bom['raw3']);
            $bo->perc1 = (float) $bom['perc1'];
            $bo->perc2 = (float) $bom['perc2'];
            $bo->perc3 = (float) $bom['perc3'];
            $bo->losses = (float) ($bom['losses']/100);
            $bo->save();
        }
    }
}
