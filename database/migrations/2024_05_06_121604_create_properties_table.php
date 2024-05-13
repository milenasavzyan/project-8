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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('status');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('type_id');
            $table->double('price');
            $table->double('area');
            $table->integer('rooms');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->integer('zip_code');
            $table->string('description');
            $table->integer('building_age');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('type_id')->references('id')->on('types');

//            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
