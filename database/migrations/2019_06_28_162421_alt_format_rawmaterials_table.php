<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use \App\Models\RawMaterial;
use \Illuminate\Support\Facades\DB;

class AltFormatRawmaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $raws = RawMaterial::whereNull('valueorigin')->get();
        foreach($raws as $raw) {
            $raw->valueorigin = $raw->valueicms*1.101928375;
            $raw->icms = 12;
            $raw->save();
        }
        Schema::table('rawmaterials', function (Blueprint $table) {
            $table->decimal('valueorigin', 8, 2)->nullable()->change();
            $table->decimal('icms', 4, 2)->nullable()->change();
            $table->dropColumn('value');
            $table->dropColumn('valueicms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rawmaterials', function (Blueprint $table) {
            //
        });
    }
}
