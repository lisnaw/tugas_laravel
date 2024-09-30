<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('wali_siswas', function (Blueprint $table) {
            $table->id();
            $table->integer("siswa_id")->Unique();
            $table->string("nama_wali",30);
            $table->integer("NIK")->unique();
            $table->string("hubungan",20);
            $table->integer("no_telepon")->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wali_siswas');
    }
};
