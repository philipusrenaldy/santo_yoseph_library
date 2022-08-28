<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('book_name');
            $table->string('author')->nullable();
            $table->string('publisher')->nullable();
            $table->date('published_at')->nullable();
            $table->string('published_city')->nullable();
            $table->string('book_code')->unique();
            $table->string('ISBN')->nullable();
            $table->string('book_size')->nullable();
            $table->string('note')->nullable();
            $table->text('synopsis')->nullable();
            $table->string('abstract')->nullable();
            $table->string('path_img')->nullable();
            $table->string('path_file')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
