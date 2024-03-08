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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('osztaly_id', 30); //pl SZFA2
            $table->rememberToken();
            $table->timestamps();
        });


        DB::table('users')->insert([
            ['name' => 'Ember1', 'email' => 'ember1@gmail.com', 'password' => 'Aa1234@', 'osztaly_id' => 'SZF2'],
            ['name' => 'Ember2', 'email' => 'ember2@gmail.com', 'password' => 'Aa1234@', 'osztaly_id' => 'SZF1'],
            ['name' => 'Ember3', 'email' => 'ember3@gmail.com', 'password' => 'Aa1234@', 'osztaly_id' => 'IRÜ1'],
            ['name' => 'Ember4', 'email' => 'ember4@gmail.com', 'password' => 'Aa1234@', 'osztaly_id' => 'SZF2'],

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
