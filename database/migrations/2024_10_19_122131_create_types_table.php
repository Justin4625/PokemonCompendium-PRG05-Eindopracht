<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Voeg de 18 Pokémon types toe aan de database
        DB::table('types')->insert([
            ['name' => 'Normal'],
            ['name' => 'Fire'],
            ['name' => 'Water'],
            ['name' => 'Electric'],
            ['name' => 'Grass'],
            ['name' => 'Ice'],
            ['name' => 'Fighting'],
            ['name' => 'Poison'],
            ['name' => 'Ground'],
            ['name' => 'Flying'],
            ['name' => 'Psychic'],
            ['name' => 'Bug'],
            ['name' => 'Rock'],
            ['name' => 'Ghost'],
            ['name' => 'Dragon'],
            ['name' => 'Dark'],
            ['name' => 'Steel'],
            ['name' => 'Fairy'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types');
    }
};
