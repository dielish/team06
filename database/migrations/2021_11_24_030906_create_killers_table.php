<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKillersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('killers', function (Blueprint $table) {
            $table->id();
            $table->string('killer', 60)->comment('殺手');
            $table->foreignId("Did")->comment('追加內容');
            $table->string("difficulty", 60)->comment('使用難度');
            $table->string("strenght1", 60)->comment('能力1');
            $table->string("strenght2", 60)->nullable()->comment('能力2');
            $table->string("inherited1", 60)->comment('傳承技能1');
            $table->string("inherited2", 60)->comment('傳承技能2');
            $table->string("inherited3", 60)->comment('傳承技能3');
            $table->string("anothername",60)->nullable()->comment('別名');
            $table->timestamps();
            $table->foreign('Did')->references('id')->on('dlcs')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('killers');
    }
}
