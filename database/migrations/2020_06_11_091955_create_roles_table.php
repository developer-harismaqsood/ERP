<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('key', 50);
            $table->string('name');
            $table->unsignedSmallInteger('order')->nullable();
        });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
    {
        Schema::dropIfExists('roles');
    }
}