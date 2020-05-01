<?php

use Illuminate\Database\Seeder;
use App\Comentario;

class ComentarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $comentario = new Comentario();
    $comentario->titulo = 'Titulo DEMo';
    $comentario->descripcion = 'Comentario DEMO';
    $comentario->user_id=1;//account()->associate($account);
    $comentario->save();

    }
}
