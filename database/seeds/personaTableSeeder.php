<?php

use Illuminate\Database\Seeder;
use App\persona;
class personaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        
        $persona=new persona;
        $persona->name="Leopoldo Pinedo";
        $persona->email="lpinedo@grupo-un.com";
        $persona->telephonenumber=58;
        $persona->title="desarrollador web";
        $persona->description="desarrollador web";
        $persona->save();
    }
}
