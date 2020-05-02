<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $user = new User();
     $user->name = 'Luis_Garcia';
     $user->email = 'admin@example.com';
     $user->password = bcrypt('secret');
     $user->save();
     
     $user = new User();
     $user->name = 'Otro_usuario';
     $user->email = 'usuario@example.com';
     $user->password = bcrypt('secret');
     $user->save();

    }
}
