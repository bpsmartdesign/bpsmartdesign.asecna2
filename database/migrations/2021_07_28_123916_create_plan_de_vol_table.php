<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanDeVolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_de_vol', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('latitude_dep')->nullable();
            $table->float('latitude_arr')->nullable();
            $table->float('longitude_dep')->nullable();
            $table->float('longitude_arr')->nullable();
            $table->float('masse')->nullable();
            $table->string('type_avion')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('plan_de_vol');
    }
}
