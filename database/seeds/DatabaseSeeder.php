<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);

        $this->call(RoleTableSeeder::class);//esta semilla crea los registros de la tabla role que se usa para definir los permisos de cada usuario los cuales son 4, admin, rrhh, cmd, user

        $this->call(statuTableSeeder::class);//esta semilla crea los registros de la tabla estatus que esta conectada con los documentos que el usuario ingresa a travez de una relacion uno a uno 

        $this->call(personaTableSeeder::class);
    }
}
