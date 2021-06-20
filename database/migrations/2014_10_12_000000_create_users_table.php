<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('rg')->nullable(true);
            $table->string('cpf')->nullable(true);
            $table->date('birthDate')->nullable(true);
            $table->string('gender')->nullable(true);
            $table->string('cep')->nullable(true);
            $table->string('address')->nullable(true);
            $table->string('district')->nullable(true);
            $table->string('number')->nullable(true);
            $table->string('comp')->nullable(true);
            $table->string('state')->nullable(true);
            $table->string('city')->nullable(true);
            $table->string('phone')->nullable(true);
            $table->string('cell')->nullable(true);
            $table->string('status')->nullable(true);
            $table->string('type')->nullable(true);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
