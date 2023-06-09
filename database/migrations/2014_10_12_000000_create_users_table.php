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
            // $table->foreignId('role_id')->constrained();
            $table->string('register');
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->enum('profile', ['it', 'at']);
            $table->enum('status', ['intern', 'extern']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('hiring_date');
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
