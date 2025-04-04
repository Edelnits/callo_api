<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->enum('name', ['BSBA', 'EDUCATION', 'BSIT'])->unique();
            $table->timestamps();
        });
        DB::table('departments')->insert([
            ['name' => 'BSBA'],
            ['name' => 'EDUCATION'],
            ['name' => 'BSIT'],
        ]);
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
