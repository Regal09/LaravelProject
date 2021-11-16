<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([

          'name'=> 'Camel',
          'email'=> 'Camel@fr.fr',
          'passeword'=>Hash::make('1133')
        ]);
    }
}
