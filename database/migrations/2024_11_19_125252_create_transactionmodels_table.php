<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactionmodels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('amount');
            $table->decimal('running_balance');
            $table->string('description');
            $table->enum('type',['credit','debit']);
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
        Schema::dropIfExists('transactionmodels');
    }
}
