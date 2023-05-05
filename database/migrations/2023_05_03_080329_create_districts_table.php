<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('district', function (Blueprint $table) {
            $table->id();
            $table->string('district_name');
            $table->string('polygon')->nullable();
            $table->string('province_id')->nullable();
            $table->string('long_lat')->nullable();
            $table->string('polygon_hc')->nullable();
            $table->string('zoom_gm')->nullable();
            $table->string('partnercare')->nullable();
            $table->string('notepartnercare')->nullable();
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
        Schema::dropIfExists('districts');
    }
}
