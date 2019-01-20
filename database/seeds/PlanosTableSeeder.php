<?php

use Illuminate\Database\Seeder;

class PlanosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('planos')->insert([
           'name' => 'Plano Profissional',
           'price' => 399,
           'created_at' => Now(),
           'updated_at' => Now()
       ]);
    }
}
