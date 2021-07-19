<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFunnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funnels', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('name');
            $table->string('tag');
            $table->string('logo');
            $table->string('subdomain');
            $table->string('steps');
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
        Schema::dropIfExists('funnels');
    }
}
