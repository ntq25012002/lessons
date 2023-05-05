<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('avatar_url')->nullable();
            $table->string('major');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('province_id')->nullable();
            $table->string('district_id')->nullable();
            $table->string('address')->nullable();
            $table->text('social_info')->nullable();
            $table->text('description')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('teachers');
    }
}
