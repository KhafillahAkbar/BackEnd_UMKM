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
        Schema::create('umkm', function (Blueprint $table) {
            $table->id();
            $table->string('umkm_name')->nullable();
            $table->string('umkm_owner');
            $table->string('umkm_email');
            $table->string('umkm_phone');
            $table->text('umkm_address');
            $table->text('umkm_desc');
            $table->timestamp('join_at')->nullable();
            $table->string('umkm_password')->nullable();
            $table->string('umkm_logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkm');
    }
};
