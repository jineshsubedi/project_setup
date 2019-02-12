<?php

use Illuminate\Database\Seeder;
use App\Model\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'name' => 'Admin',
        	'username' => 'admin',
        	'password' => bcrypt('password'),
        	'phone' => '1234567890',
        	'address' => 'KTM',
        ]);
    }
}
