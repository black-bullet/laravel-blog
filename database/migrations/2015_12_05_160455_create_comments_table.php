<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('post_id')->unsigned();
            $table->string('name');
            $table->text('comment');
            $table->boolean('published')->default(true);
            $table->timestamps();
        });

        Schema::table('comments', function($table) {
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function($table)
        {
            $table->dropForeign('comments_post_id_foreign');
        });

        Schema::drop('comments');
    }
}
