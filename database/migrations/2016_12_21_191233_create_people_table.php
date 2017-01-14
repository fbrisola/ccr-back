<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration {
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up() {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
            // my fields
            $table->string('name');
            $table->string('lastname');
            $table->enum('genre', ['Masculino', 'Feminino']);
            $table->date('birthdate');
            $table->string('cel', 20);
            $table->string('email');
            $table->boolean('married');
            $table->integer('address_id')->unsigned();
            
            // foreign keys
            $table->foreign('address_id')->references('id')->on('addresses');
            
        });
    }
    
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down() {
        Schema::dropIfExists('people');
    }
    
}