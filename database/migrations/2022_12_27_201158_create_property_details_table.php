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
        Schema::create('property_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade')->change();

            $table->integer('total_bed_room')->unsigned();
            $table->integer('total_bathroom')->unsigned();
            $table->integer('total_bellcony')->unsigned()->default(0);
            $table->integer('total_attched_bathroom')->unsigned()->default(0);
            $table->integer('total_guest_room')->unsigned()->default(0);
            $table->integer('total_living_room')->unsigned()->default(0);
            $table->integer('kitchen_status')->unsigned();

            $table->timestamps();
            $table->integer('status')->default(1);
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->change();
            
            $table->unsignedBigInteger('updated_by')->nullable();
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
        Schema::dropIfExists('property_details');
    }
};
