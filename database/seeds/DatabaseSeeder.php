<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(RawMaterialsSeeder::class);
        $this->call(KnittingsSeeder::class);
        $this->call(DyeingsSeeder::class);
        $this->call(DestinationsSeeder::class);
        $this->call(CriteriasSeeder::class);
        $this->call(BomsSeeder::class);
        $this->call(PackagingsSeeder::class);
    }
}
