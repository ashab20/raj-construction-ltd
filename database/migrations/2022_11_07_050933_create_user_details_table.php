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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->change();

            $table->unsignedBigInteger('designatin_id')->foreign()->references('id')->on('designatins')->onDelete('cascade')->change();

            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('bio',500)->nullable();
            $table->string('gender',20)->nullable();
            $table->string('resume')->nullable();
//   present address
            $table->string('present_address')->nullable();
            $table->unsignedBigInteger('present_countrie_id')->foreign()->references('id')->on('countries')->onDelete('cascade')->change()->nullable();

            $table->unsignedBigInteger('present_division_id')->foreign()->references('id')->on('divisions')->onDelete('cascade')->change()->nullable();

            $table->unsignedBigInteger('present_district_id')->foreign()->references('id')->on('districts')->onDelete('cascade')->change()->nullable();
            
            // permanent address
            $table->string('permanent_address')->nullable();
            $table->unsignedBigInteger('permanent_countrie_id')->foreign()->references('id')->on('countries')->onDelete('cascade')->change();

            $table->unsignedBigInteger('permanent_division_id')->foreign()->references('id')->on('divisions')->onDelete('cascade')->change();

            $table->unsignedBigInteger('permanent_district_id')->foreign()->references('id')->on('districts')->onDelete('cascade')->change();

            // default
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
        Schema::dropIfExists('user_details');
    }
};
