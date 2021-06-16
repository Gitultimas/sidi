<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $role = new Role();
            $role->nombre = 'admin';
            $role->descripcion = 'administrador';
            $role->save();

            $role = new Role();
            $role->nombre = 'rrhh';
            $role->descripcion = 'Recursos Humanos';
            $role->save();

            $role = new Role();
            $role->nombre = 'cmd';
            $role->descripcion = 'Comedor';
            $role->save();


            $role = new Role();
            $role->nombre = 'user';
            $role->descripcion = 'User';
            $role->save();
    }
}
