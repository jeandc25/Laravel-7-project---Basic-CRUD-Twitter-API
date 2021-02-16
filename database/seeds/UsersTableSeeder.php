<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'juan',
            'email'=>'jean_dc_17@hotmail.com',
            'password'=>bcrypt('12345678910')
        ]);
        factory(User::class,10)->create();
    }
}
