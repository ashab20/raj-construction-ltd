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
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('nid_birth_Cirtificate');
            $table->date('dob');
            $table->string('attachment')->nullable();
            $table->string('present_address',500)->nullable();
            $table->string('parmanent_address',500)->nullable();
            $table->integer('total_working_day')->nullable()->unsigned();
            $table->time('total_working_hour')->nullable();
            $table->decimal('total_sallary',12,2)->nullable()->unsigned();
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
        Schema::dropIfExists('workers');
    }
};
