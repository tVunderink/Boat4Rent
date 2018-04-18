<?php

use Illuminate\Database\Seeder;

class BoatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('boats')->insert([
      'street' => 'Noordergat',
      'housenumber' => '8',
      'postcode' => '9976 VR',
      'length' => '14',
      'price' => '300',
      'user_id' => '2',
      'created_at' => '2018-01-01 10:00:00',
      'updated_at' => '2018-01-01 10:00:00',
      ]);


      DB::table('boats')->insert([
      'street' => 'Hoge der A',
      'housenumber' => '17',
      'postcode' => '9712 AD',
      'length' => '18',
      'price' => '370',
      'user_id' => '2',
      'created_at' => '2018-01-01 10:10:00',
      'updated_at' => '2018-01-01 10:10:00',
      ]);


    }
}
