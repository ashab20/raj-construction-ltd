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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('team_name');
            // $table->unsignedBigInteger('company_id')->nullable()->comment('company id');
            // $table->foreign('company_id')->references('id')->on('company')->onDelete('cascade')->change();

            // $table->unsignedBigInteger('builder_options_id')->nullable()->comment('builder options id');
            // $table->foreign('builder_options_id')->references('id')->on('builder options id')->onDelete('cascade')->change();
            //default
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
        Schema::dropIfExists('teams');
    }
};
