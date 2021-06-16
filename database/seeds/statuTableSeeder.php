<?php

use Illuminate\Database\Seeder;
use App\statu;
class statuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $statu = new statu();
        $statu->descripcion = 'Pendiente';
        $statu->save();

        $statu = new statu();
        $statu->descripcion = 'Aprovado';
        $statu->save();
    }
}
