<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_product', function (Blueprint $table) {
            $table->id(); 
            $table->string('title', 100)->index(); 
            $table->string('slug', 100)->index(); 
            $table->text('content'); 
            $table->text('image'); 
            $table->boolean('draft')->default(false); 
            // $table->timestamps();
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
    }
}
