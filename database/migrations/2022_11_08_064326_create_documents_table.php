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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id')->foreign(users)->references('id')->on('users')->onDelete('cascade')->change();
            $table->integer('squire_feet')->default(1);
            $table->string('house_no');
            $table->string('block');
            $table->integer('road_no')->default(1);
            $table->string('address');
            $table->unsignedBigInteger('documents_id')->foreign()->references('id')->on('documents')->onDelete('cascade')->change();
            $table->unsignedBigInteger('design_id')->foreign()->references('id')->on('designs')->onDelete('cascade')->change();
            $table->decimal('total_budget',12,2);
            $table->decimal('total_cost',12,2);
            $table->integer('squire_feet')->default(1);


                //default
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
        Schema::dropIfExists('documents');
    }
};
