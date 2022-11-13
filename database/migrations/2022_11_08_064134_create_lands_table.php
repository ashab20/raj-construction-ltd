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
        Schema::create('lands', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->change();
            $table->integer('land_area')->default(1);
            $table->integer('building_area')->default(1);
            $table->integer('building_height')->default(1);
            $table->string('house_no');
            $table->string('block')->nullable();
            $table->integer('road_no')->nullable();
            
            $table->unsignedBigInteger('document_id')->nullable();$table->foreign('document_id')->references('id')->on('documents')->onDelete('cascade')->change();

            $table->unsignedBigInteger('design_id')->nullable();
            $table->foreign('design_id')->references('id')->on('designs')->onDelete('cascade')->change();
            $table->decimal('total_budget',12,2);
            $table->decimal('total_cost',12,2);

            
               //default
            $table->integer('status')->default(1);
            $table->unsignedBigInteger('created_by')->nullable();
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
        Schema::dropIfExists('lands');
    }
};
