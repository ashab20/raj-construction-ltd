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
        Schema::create('flat_budgets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('flat_details_id');
            $table->foreign('flat_details_id')->references('id')->on('flat_details')->onDelete('cascade')->change();
            $table->unsignedBigInteger('flat_budget_details_id');
            $table->foreign('flat_budget_details_id')->references('id')->on('flat_budget_details')->onDelete('cascade')->change();
            $table->integer('Total_working_day');
            $table->integer('Total_worker');
            $table->dateTime('issues_date')->default(new DateTime());

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
        Schema::dropIfExists('flat_budgets');
    }
};
