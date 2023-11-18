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
        Schema::create('notfications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('jobId');
            $table->string('idntityNum');
            $table->string('frontImage');
            $table->string('backImage');
            $table->float('salry');
            $table->date('beginingDate');
            $table->date('endDate');
            $table->date('notfyDate');
            $table->string('notes')->nullable();
            $table->string('also')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notfications');
    }
};
