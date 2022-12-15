<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * マイグレーション
 */
class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();                //主キー
            //VARCHAR型のカラムを作成
            $table->string('title');    //タイトル
            //text型のカラムを作成
            $table->text('body');      //本文
            $table->timestamps();     //created_atとupdated_atのカラムを作成
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
