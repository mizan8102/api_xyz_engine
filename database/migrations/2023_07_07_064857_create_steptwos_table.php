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
        Schema::create('steptwos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stepone_id')->nullable();
            $table->double('max_X');
            $table->double('min_X');
            $table->double('max_Y');
            $table->double('min_Y');
            $table->double('max_Z');
            $table->double('min_Z');
            $table->timestamps();

            $table->foreign('stepone_id')->references('id')->on('stepones');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('steptwos');
    }
};
