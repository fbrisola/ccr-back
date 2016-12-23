<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndaddsView extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        DB::statement('
            CREATE VIEW
                indadds AS 
            SELECT
                i.id,
                i.name,
                i.lastname,
                i.genre,
                i.birthdate,
                i.cel,
                i.email,
                i.married,
                a.street,
                a.district,
                a.city,
                a.state,
                a.zipcode,
                a.phone
            FROM
                individuals AS i
            INNER JOIN
                addresses AS a
            ON
                i.address_id = a.id;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        DB::statement('DROP VIEW indadds');
    }

}
