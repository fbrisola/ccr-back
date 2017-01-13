<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('relationships', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            //my fields
            $table->integer('person_id_1')->unsigned();
            $table->integer('role_id_1')->unsigned();
            $table->integer('person_id_2')->unsigned();
            $table->integer('role_id_2')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('relationships');
    }

}
