<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogs', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->comment('名稱')->nullable(false);
            $table->tinyInteger('mid')->unsigned()->comment('廠商編號')->nullable(false);
            $table->double('price')->comment('價格')->nullable(false);
            $table->double('evaluaation')->comment('評價')->nullable(false);
            $table->date('issue_date')->comment('發行日期')->nullable(true);
            $table->double('revenue')->comment('硬手')->nullable(false);
            $table->string('game_type',50)->comment('遊戲類型')->nullable(false);
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
        Schema::dropIfExists('catalogs');
    }
}
