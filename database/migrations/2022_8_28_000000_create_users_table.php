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
        Schema::create('users', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            // $table->boolean('is_admin')->nullable()->default(false);
            $table->foreignId('questions_id')->nullable()->constrained();
            $table->foreignId('roles_id')->default(1)->constrained();
            // $table->unsignedBigInteger('roles_id');
            // $table->foreign('roles_id')->references('id')->on('roles');

            // $table->unsignedBigInteger('questions_id');
            // $table->foreign('questions_id')->references('id')->on('questions');

            $table->string('type_dni')->nullable();
            $table->integer('dni')->nullable();
            $table->integer('phone')->nullable();
            $table->boolean('approved')->default(false);
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
};
