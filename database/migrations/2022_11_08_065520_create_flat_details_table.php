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
        Schema::create('flat_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('flat_id');
            $table->foreign('flat_id')->references('id')->on('flats')->onDelete('cascade')->change();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade')->change();
            $table->integer('squire_feet');
            $table->decimal('total_cost',12,2);
            $table->unsignedBigInteger('flat_budget_id')->nullable();
            $table->foreign('flat_budget_id')->references('id')->on('flat_budgets')->onDelete('cascade')->change();
            $table->unsignedBigInteger('Material_details_id');
            $table->foreign('Material_details_id')->references('id')->on('material_details')->onDelete('cascade')->change();
            $table->decimal('sales_price',12,2);

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
        Schema::dropIfExists('flat_details');
    }
};
