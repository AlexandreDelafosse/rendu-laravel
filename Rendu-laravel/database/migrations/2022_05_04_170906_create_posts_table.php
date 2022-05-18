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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('title', 50);
            $table->char('subtitle', 50);
            $table->text('description');
            $table->dateTime('date_de_publication');
            $table->boolean('confirmed');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->foreignId('users_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('posts');
        Schema::disableForeignKeyConstraints();
    }
};
