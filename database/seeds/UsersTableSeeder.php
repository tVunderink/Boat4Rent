<?php

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
       DB::table('users')->insert([
           'name' => 'admin',
           'email' => 'admin@admin.com',
           'password' => bcrypt('admin'),
       ]);

       DB::table('users')->insert([
           'name' => 'TestVerhuurder',
           'email' => 'verhuur@test.com',
           'password' => bcrypt('verhuurder'),
       ]);

       DB::table('users')->insert([
           'name' => 'TestHuurder',
           'email' => 'huur@test.com',
           'password' => bcrypt('huurder'),
       ]);
     }
}
