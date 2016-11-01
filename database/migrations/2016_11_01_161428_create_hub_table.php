<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hub', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('hub_id');
            $table->string('name');
            $table->string('logo');
            $table->text('description');
            $table->string('curator');
            $table->integer('view');
            $table->enum('active', ['0','1']);
            $table->string('category_id');
            $table->integer('count');
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
        Schema::drop('hub');
    }
}
