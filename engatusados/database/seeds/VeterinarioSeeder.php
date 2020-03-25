<?php

use Illuminate\Database\Seeder;

class VeterinarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $arrayVeterinario;

    public function run()
    {
       $this->arrayVeterinario = array(
            array(
                'nombre' => 'Los Olivos',
                'direccion' => 'Calle José Ramos Borrero, 12',
                'localidad' => 'San Fernando',
                'provincia' => 'Cádiz',
                'email' => 'losolivos@gmail.com',
                'telefono' => '956 88 75 42'

            )
        );
        DB::table('veterinario')->delete();
        foreach( $this->arrayVeterinario as $veterinario ) {
         $p = new Veterinario;
         $p->nombre = $veterinario['nombre'];
         $p->direccion = $veterinario['direccion'];
         $p->localidad = $veterinario['localidad'];
         $p->provincia = $veterinario['provincia'];
         $p->email = $veterinario['email'];
         $p->telefono = $veterinario['telefono'];
         $p->save();
     }
    }
}
