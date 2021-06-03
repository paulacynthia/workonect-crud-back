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
            $table->id(); //primarykey
            $table->string('name');
            $table->string('email')->unique(); //valor único
            $table->timestamp('email_verified_at')->nullable(); //Pode ser nulo
            $table->string('password');
            $table->string('telephone');
            $table->string('formation');
            $table->rememberToken();
            $table->timestamps(); //created_at e update_at
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
