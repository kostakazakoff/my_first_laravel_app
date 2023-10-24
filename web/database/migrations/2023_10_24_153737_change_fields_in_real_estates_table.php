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
        Schema::table('real_estates', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('location');
            $table->integer('rooms');
            $table->string('type');
            $table->
            $table->decimal('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('real_estates', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('city');
            $table->text('address');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->decimal('price');
            $table->timestamps();
        });
    }
};
