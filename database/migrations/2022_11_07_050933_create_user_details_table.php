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

            $table->string('father_name');
            $table->string('mother_name');
            $table->string('bio',500)->nullable();
            $table->string('gender',20)->nullable();
  
            $table->unsignedBigInteger('countries_id')->foreign()->references('id')->on('countries')->onDelete('cascade')->change();

            $table->unsignedBigInteger('divisions_id')->foreign()->references('id')->on('divisions')->onDelete('cascade')->change();

            $table->unsignedBigInteger('districts_id')->foreign()->references('id')->on('districts')->onDelete('cascade')->change();

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
