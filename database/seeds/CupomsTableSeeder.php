<?php

use Illuminate\Database\Seeder;

class CupomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cupoms')->insert([
           'discount_percentage' => 10,
           'code' => 'PVf8yAH19Q',
           'usado' => false,
           'created_at' => Now(),
           'updated_at' => Now()
       ]);

       DB::table('cupoms')->insert([
          'discount_percentage' => 20,
          'code' => str_random(10),
          'usado' => false,
          'created_at' => Now(),
          'updated_at' => Now()
      ]);

      DB::table('cupoms')->insert([
         'discount_percentage' => 30,
         'code' => str_random(10),
         'usado' => false,
         'created_at' => Now(),
         'updated_at' => Now()
     ]);
    }
}
