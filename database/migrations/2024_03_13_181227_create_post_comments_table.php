<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    #Run the migrations.
    
    public function up(): void
    {
        Schema::create('post_comments', function (Blueprint $table) {
            $table->primary(['post_id', 'comment_id']);
            $table->bigInteger('post_id')->unsigned();
            $table->bigInteger('comment_id')->unsigned();
            $table->timestamps();

            $table->foreign('post_id')->references('id')->on('posts')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('comment_id')->references('id')->on('comments')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('post_comments');
    }
};