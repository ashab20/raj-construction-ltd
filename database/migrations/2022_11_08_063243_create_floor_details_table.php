<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('floor_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unSingedBigInteger('land_id');
            $table->foreign('land_id')->references('id')->on('lands')->onDelete('cascade')->change();
            $table->integer('floor_no');
            $table->unSingedBigInteger('flat_id');
            $table->foreign('flat_id')->references('id')->on('flats')->onDelete('cascade')->change();
            $table->integer('total_squire_feet');
            $table->decimal('total_cost',12,2);
            $table->decimal('total_budget',12,2);
            $table->unSingedBigInteger('material_id');
            $table->foreign('material_id')->references('id')->on('materials')->onDelete('cascade')->change();
            
            $table->integer('status')->default(1);
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->change();
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->change();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('floor_details');
    }
};