<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('facility_housing', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('housing_id');
            $table->unsignedBigInteger('facility_id');
            $table->decimal('distance', 10, 2); // distance in meters
            $table->timestamps();

            $table->foreign('housing_id')->references('id')->on('housings')->onDelete('cascade');
            $table->foreign('facility_id')->references('id')->on('facilities')->onDelete('cascade');
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facility_housing');
    }
};
