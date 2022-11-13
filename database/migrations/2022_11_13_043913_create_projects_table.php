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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('project_name');
            $table->string('project_overview');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->decimal('budget',15,2);
            
            // $table->string('image')->nullable();
            
            // $table->bigIncrements('team_id')->nullable();
            // $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade')->change();

            $table->bigIncrements('user_id')->comment('Ower id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->change();

            $table->unsignedBigInteger('design_id')->nullable();
            $table->foreign('design_id')->references('id')->on('designs')->onDelete('cascade')->change();

            $table->unsignedBigInteger('document_id')->nullable();
            $table->foreign('document_id')->references('id')->on('documents')->onDelete('cascade')->change();

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
        Schema::dropIfExists('projects');
    }
};
