<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commands', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_service');
            $table->time('time_service');
            $table->float('total_price',8,2);
            $table->string('payment_status')->default('open');
            $table->string('payment_form');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');

            /*no caso dos serviços solicitados, gravar num array, usar funcao serialize() para salvar
              neste campo e unserialize() para recuperar o array do banco dados*/ 
            $table->text('services_list');
            
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
        Schema::dropIfExists('commands');
    }
}
