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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->date('purchase_date');
            $table->string('voucher')->nullable();
            $table->integer('tax')->nullable()->default(0);
            $table->integer('discount')->nullable()->default(0);
            $table->integer('total_cost');
            $table->integer('payment');
            $table->string('note',1000)->nullable();

            $table->integer('status')->default(1);
            
            $table->unsignedBigInteger('purchase_by');
            $table->foreign('purchase_by')->references('id')->on('users')->onDelete('cascade')->change();

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
        Schema::dropIfExists('purchases');
    }
};
