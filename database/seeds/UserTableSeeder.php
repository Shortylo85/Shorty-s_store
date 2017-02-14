<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User([
            'name' => 'Danijel Petrovic',
            'email' => 'dane@mail.com',
            'password' => bcrypt('danijel'),
            'status' => 1
        ]);

        $user->save();
    }
}
