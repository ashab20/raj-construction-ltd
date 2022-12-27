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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade')->change();
            $table->unsignedBigInteger('floor_details_id');
            $table->foreign('floor_details_id')->references('id')->on('floor_details')->onDelete('cascade')->change();

            $table->decimal('total_squire_feet',10,0)->unsigned();
            $table->decimal('total_installment',10,0)->unsigned();
            $table->integer('installment_duration')->unsigned();
            $table->decimal('total_cost',12,2)->unsigned();
            $table->decimal('selling_price',12,2)->unsigned();
            $table->enum('property_status',['ready','ongoing','soon'])->default('soon');


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
        Schema::dropIfExists('properties');
    }
};
