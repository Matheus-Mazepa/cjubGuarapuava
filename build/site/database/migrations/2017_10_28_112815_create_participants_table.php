<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->char('cpf', 11);
            $table->string('address')->nullable();
            $table->string('community');
            $table->char('size_t_shirt', 2);
            $table->string('phone')->nullable();
            $table->string('email');
            $table->date('birth_date')->nullable();
            $table->boolean('has_special_needs');
            $table->text('special_needs')->nullable();
            $table->boolean('needs_transport')->nullable();
            $table->text('observations')->nullable();
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
        Schema::dropIfExists('participants');
    }
}
