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
            $table->string('author');
            $table->string('publisher');
            $table->date('published_at');
            $table->string('published_city ');
            $table->string('NISN');
            $table->string('book_code')->unique();
            $table->string('ISBN');
            $table->string('book_size');
            $table->string('note');
            $table->string('synopsis');
            $table->string('abstract');
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
        Schema::dropIfExists('books');
    }
}
