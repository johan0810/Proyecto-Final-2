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
            $table->timestamp('email_verified_at');
            $table->string('password');
            $table->foreignId('roles_id')->default(2)->constrained();
            $table->string('type_dni');
            $table->integer('dni');
            $table->integer('phone');
            $table->boolean('approved')->default(false);
            $table->string('image')->nullable();
            $table->rememberToken();
            $table->timestamps();
            // $table->boolean('is_admin')->nullable()->default(false);
            // $table->foreignId('questions_id')->nullable()->constrained();

            // $table->unsignedBigInteger('roles_id');
            // $table->foreign('roles_id')->references('id')->on('roles');

            // $table->unsignedBigInteger('questions_id');
            // $table->foreign('questions_id')->references('id')->on('questions');



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
