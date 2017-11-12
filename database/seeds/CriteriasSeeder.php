<?php

use Illuminate\Database\Seeder;
use App\Models\Criteria;

class CriteriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Criteria::truncate();
        $crit = new Criteria();
        $crit->operational_cost=180000;
        $crit->financial_cost=120000;
        $crit->apportionment=40000;
        $crit->profit=0.1;
        $crit->commission=0.03;
        $crit->financial_rate=0.027;
        $crit->ipi=0;
        $crit->pis=0.0165;
        $crit->cofins=0.076;
        $crit->csll=0;
        $crit->ir=0;
        $crit->save();    
    }
}
