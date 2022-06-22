<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;
use App\Models\User;

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
            $table->string('title');
            $table->text('content');
            $table->string('image');

           /* $table->foreignIdFor(User::class)->onDelete('cascade')->nullable();
            $table->foreignIdFor(Category::class)->onDelete('cascade')->nullable(); */


        });


        Schema::table('posts', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
        });

       /* Schema::table('posts', function (Blueprint $table) {
            $table->foreignId('users_id')->constrained('users');
        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('posts');
        Schema::enableForeignKeyConstraints();
    }
};
