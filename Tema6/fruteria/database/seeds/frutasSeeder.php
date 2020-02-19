<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\Table;

class frutasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<=50;$i++){
            DB::table('frutas')->insert([
                'nombre'=>'Banano'.$i,
                'descripcion'=>'descripcion de la fruta'.$i,
                'precio'=>$i,
                'fecha'=>date('Y-m-d')
            ]);
        }

        $this->command->info("La tabla ha sido rellenada");
    }
}
