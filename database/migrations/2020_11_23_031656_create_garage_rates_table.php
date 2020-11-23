<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGarageRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garage_rates', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->timestamp('opening_time');
            $table->timestamp('closing_time');
            $table->string('type');
            $table->string('rate');
            $table->string('status');
            $table->string('succeeding_rate');
            $table->unsignedInteger('garage_id');
            $table->timestamps('');
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
        Schema::dropIfExists('garage_rates');
    }
}
