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
        Schema::create('designatins', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('designation');
            // $table->decimal('base_salary',12,2);
             // default
             $table->integer('status')->default(1);
             $table->unsignedBigInteger('created_by');
             $table->unsignedBigInteger('updated_by')->nullable();
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
        Schema::dropIfExists('designatins');
    }
};
