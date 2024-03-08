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
        Schema::create('bejegyzes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tevekenyseg_id')->references('tevekenyseg_id')->on('tevekenysegs');
            // $table->foreignId('user_id')->references('id')->on('users');
            $table->string('osztaly_id', 30); //pl SZFA2
            //$table->foreign('osztaly_id')->references('osztaly_id')->on('users');
            $table->boolean('allapot');
            $table->timestamps();
        });

        DB::table('bejegyzes')->insert([
            ['tevekenyseg_id' => 1, 'osztaly_id' => 'SZF2', 'allapot' => 0],
            ['tevekenyseg_id' => 2, 'osztaly_id' => 'SZF2', 'allapot' => 1],
            ['tevekenyseg_id' => 4, 'osztaly_id' => 'SZF2', 'allapot' => 0],
            ['tevekenyseg_id' => 5, 'osztaly_id' => 'SZF2', 'allapot' => 0],
            ['tevekenyseg_id' => 1, 'osztaly_id' => 'SZF2', 'allapot' => 1],
            ['tevekenyseg_id' => 3, 'osztaly_id' => 'SZF2', 'allapot' => 0],
            ['tevekenyseg_id' => 6, 'osztaly_id' => 'SZF2', 'allapot' => 1],
            ['tevekenyseg_id' => 4, 'osztaly_id' => 'SZF2', 'allapot' => 0],
            ['tevekenyseg_id' => 1, 'osztaly_id' => 'SZF2', 'allapot' => 1],
            ['tevekenyseg_id' => 2, 'osztaly_id' => 'SZF2', 'allapot' => 1],
            ['tevekenyseg_id' => 1, 'osztaly_id' => 'SZF2', 'allapot' => 0]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bejegyzes');
    }
};
