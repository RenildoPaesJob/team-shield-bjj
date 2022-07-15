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
        Schema::create('historic_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('aluno_id');
            $table->dateTime('payment_date');
            $table->dateTime('finish_payment_date');
            $table->integer('payment_statuses_id');
            $table->decimal('value', 10,2);
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
        Schema::dropIfExists('historic_payments');
    }
};
