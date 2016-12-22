<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

//call individuals table seeder class
        $this->call('IndividualsTableSeeder');
//this message shown in your terminal after running db:seed command
        $this->command->info("Individuals table seeded :)");

//call addresses table seeder class
        $this->call('AddressesTableSeeder');
//this message shown in your terminal after running db:seed command
        $this->command->info("Addresses table seeded :)");

//call roles table seeder class
        $this->call('RolesTableSeeder');
//this message shown in your terminal after running db:seed command
        $this->command->info("Roles table seeded :)");

//call couples table seeder class
        $this->call('CouplesTableSeeder');
//this message shown in your terminal after running db:seed command
        $this->command->info("Couples table seeded :)");
    }

}

class IndividualsTableSeeder extends Seeder {

    public function run() {

//truncate individuals table records
        DB::table('individuals')->truncate();

        DB::table('individuals')->insert(array(
            array('created_at' => date('Y-m-d h:m:s', time()), 'updated_at' => date('Y-m-d h:m:s', time()), 'name' => 'Fernando', 'lastname' => 'Brisola Batista', 'genre' => 'Masculino', 'birthdate' => '1969-12-03', 'email' => str_random(10) . '@gmail.com', 'married' => 'True', 'address_id' => '1'),
            array('created_at' => date('Y-m-d h:m:s', time()), 'updated_at' => date('Y-m-d h:m:s', time()), 'name' => 'Celia', 'lastname' => 'M Marques B Batista', 'genre' => 'Feminino', 'birthdate' => '1971-07-08', 'email' => str_random(10) . '@gmail.com', 'married' => 'True', 'address_id' => '1'),
            array('created_at' => date('Y-m-d h:m:s', time()), 'updated_at' => date('Y-m-d h:m:s', time()), 'name' => 'Raphael', 'lastname' => 'M Marques Brisola Batista', 'genre' => 'Masculino', 'birthdate' => '2005-04-07', 'email' => str_random(10) . '@gmail.com', 'married' => 'False', 'address_id' => '1'),
            array('created_at' => date('Y-m-d h:m:s', time()), 'updated_at' => date('Y-m-d h:m:s', time()), 'name' => 'Daniel', 'lastname' => 'M Marques Brisola Batista', 'genre' => 'Masculino', 'birthdate' => '2009-09-04', 'email' => str_random(10) . '@gmail.com', 'married' => 'False', 'address_id' => '1'),
            array('created_at' => date('Y-m-d h:m:s', time()), 'updated_at' => date('Y-m-d h:m:s', time()), 'name' => 'Fernanda', 'lastname' => 'M Marques Brisola Batista', 'genre' => 'Feminino', 'birthdate' => '2012-06-05', 'email' => str_random(10) . '@gmail.com', 'married' => 'False', 'address_id' => '1'),
            array('created_at' => date('Y-m-d h:m:s', time()), 'updated_at' => date('Y-m-d h:m:s', time()), 'name' => 'João', 'lastname' => 'da Silva', 'genre' => 'Masculino', 'birthdate' => date('Y-m-d', rand(0, time())), 'email' => str_random(10) . '@gmail.com', 'married' => 'False', 'address_id' => '2'),
            array('created_at' => date('Y-m-d h:m:s', time()), 'updated_at' => date('Y-m-d h:m:s', time()), 'name' => 'Maria', 'lastname' => 'da Silva', 'genre' => 'Feminino', 'birthdate' => date('Y-m-d', rand(0, time())), 'email' => str_random(10) . '@gmail.com', 'married' => 'False', 'address_id' => '2'),
            array('created_at' => date('Y-m-d h:m:s', time()), 'updated_at' => date('Y-m-d h:m:s', time()), 'name' => 'Pedro', 'lastname' => 'Alcantara', 'genre' => 'Masculino', 'birthdate' => date('Y-m-d', rand(0, time())), 'email' => str_random(10) . '@gmail.com', 'married' => 'True', 'address_id' => '3'),
            array('created_at' => date('Y-m-d h:m:s', time()), 'updated_at' => date('Y-m-d h:m:s', time()), 'name' => 'Mateus', 'lastname' => 'Souza', 'genre' => 'Masculino', 'birthdate' => date('Y-m-d', rand(0, time())), 'email' => str_random(10) . '@gmail.com', 'married' => 'False', 'address_id' => '4'),
            array('created_at' => date('Y-m-d h:m:s', time()), 'updated_at' => date('Y-m-d h:m:s', time()), 'name' => 'Paula', 'lastname' => 'Souza', 'genre' => 'Feminino', 'birthdate' => date('Y-m-d', rand(0, time())), 'email' => str_random(10) . '@gmail.com', 'married' => 'True', 'address_id' => '4'),
            array('created_at' => date('Y-m-d h:m:s', time()), 'updated_at' => date('Y-m-d h:m:s', time()), 'name' => 'Adriana', 'lastname' => 'Andrade', 'genre' => 'Feminino', 'birthdate' => date('Y-m-d', rand(0, time())), 'email' => str_random(10) . '@gmail.com', 'married' => 'False', 'address_id' => '5'),
        ));
    }

}

class AddressesTableSeeder extends Seeder {

    public function run() {

//truncate addresses table records
        DB::table('addresses')->truncate();

        DB::table('addresses')->insert(array(
            array('created_at' => date('Y-m-d h:m:s', time()), 'updated_at' => date('Y-m-d h:m:s', time()), 'street' => 'Rua Humberto de Campos, 67 ap 136', 'district' => 'Vila Guarani', 'city' => 'Sao Paulo', 'state' => 'SP', 'zipcode' => '04311-080', 'phone' => '11 5071-3115'),
            array('created_at' => date('Y-m-d h:m:s', time()), 'updated_at' => date('Y-m-d h:m:s', time()), 'street' => 'Rua da Padaria, 123', 'district' => 'Vila Gertrudes', 'city' => 'Sao Paulo', 'state' => 'SP', 'zipcode' => '08510-001', 'phone' => '11 5050-4040'),
            array('created_at' => date('Y-m-d h:m:s', time()), 'updated_at' => date('Y-m-d h:m:s', time()), 'street' => 'Rua Pedroso de Moraes, 520', 'district' => 'Pinheiros', 'city' => 'Sao Paulo', 'state' => 'SP', 'zipcode' => '09010-001', 'phone' => '11 5050-5050'),
            array('created_at' => date('Y-m-d h:m:s', time()), 'updated_at' => date('Y-m-d h:m:s', time()), 'street' => 'Rua dos Remidos, 1', 'district' => 'Vila Salvador', 'city' => 'Sao Paulo', 'state' => 'SP', 'zipcode' => '08010-001', 'phone' => '11 5050-6060'),
            array('created_at' => date('Y-m-d h:m:s', time()), 'updated_at' => date('Y-m-d h:m:s', time()), 'street' => 'Rua dos Libertos, 7', 'district' => 'Liberdade', 'city' => 'Sao Paulo', 'state' => 'SP', 'zipcode' => '09910-001', 'phone' => '11 5050-7070'),
        ));
    }

}

class RolesTableSeeder extends Seeder {

    public function run() {

//truncate roles table records
        DB::table('roles')->truncate();

        DB::table('roles')->insert(array(
            array('created_at' => date('Y-m-d h:m:s', time()), 'updated_at' => date('Y-m-d h:m:s', time()), 'description' => 'Esposo'),
            array('created_at' => date('Y-m-d h:m:s', time()), 'updated_at' => date('Y-m-d h:m:s', time()), 'description' => 'Esposa'),
            array('created_at' => date('Y-m-d h:m:s', time()), 'updated_at' => date('Y-m-d h:m:s', time()), 'description' => 'Pai'),
            array('created_at' => date('Y-m-d h:m:s', time()), 'updated_at' => date('Y-m-d h:m:s', time()), 'description' => 'Mae'),
            array('created_at' => date('Y-m-d h:m:s', time()), 'updated_at' => date('Y-m-d h:m:s', time()), 'description' => 'Filho'),
            array('created_at' => date('Y-m-d h:m:s', time()), 'updated_at' => date('Y-m-d h:m:s', time()), 'description' => 'Filha'),
        ));
    }

}

class CouplesTableSeeder extends Seeder {

    public function run() {

//truncate couples table records
        DB::table('couples')->truncate();

        DB::table('couples')->insert([
            'created_at' => date('Y-m-d h:m:s', time()),
            'updated_at' => date('Y-m-d h:m:s', time()),
            'husband_id' => '1',
            'wife_id' => '2',
        ]);
    }

}
