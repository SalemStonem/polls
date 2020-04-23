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
          $table->text('bio')->nullable();
          $table->string('image')->nullable();
          $table->string('name', 50);
          $table->string('last_name', 50);
          $table->string('user_name', 50)->unique();
          $table->string('name_company', 50);
          $table->string('email')->unique();
          $table->string('phone')->nullable();
          $table->string('password', 60);
          $table->string('address')->nullable();
          $table->string('code')->nullable();
          $table->enum('status', ['A', 'I', 'Trash']);
          $table->tinyInteger('kind');
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
