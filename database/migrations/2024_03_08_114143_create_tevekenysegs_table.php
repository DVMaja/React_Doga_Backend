<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tevekenysegs', function (Blueprint $table) {
            $table->id('tevekenyseg_id');
            $table->string('tevekenyseg_nev');
            $table->integer('pontszam');
            $table->timestamps();
        });


        DB::table('tevekenysegs')->insert([
            ['tevekenyseg_nev' => 'Tevekenyseg1', 'pontszam' => 4],
            ['tevekenyseg_nev' => 'Tevekenyseg2', 'pontszam' => 12],
            ['tevekenyseg_nev' => 'Tevekenyseg3', 'pontszam' => 3],
            ['tevekenyseg_nev' => 'Tevekenyseg4', 'pontszam' => 7],
            ['tevekenyseg_nev' => 'Tevekenyseg5', 'pontszam' => 1],
            ['tevekenyseg_nev' => 'Tevekenyseg6', 'pontszam' => 9],
            ['tevekenyseg_nev' => 'Tevekenyseg7', 'pontszam' => 10],


        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tevekenysegs');
    }
};
