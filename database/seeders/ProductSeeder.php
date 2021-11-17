<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('products')->insert([
            [

              'name'=> 'Radio Nouba;',
              'price'=> '10',
              'description'=>'Bonnval Gwen',
              'category'=>'Roman',
              'gallery'=>'https://images.epagine.fr/185/9782847892185_4_75.jpg'


            ],[

              'name'=> 'Jeanne',
              'price'=> '20',
              'description'=>'Cassabois Jacques',
              'category'=>'Livre',
              'gallery'=>'https://static.fnac-static.com/multimedia/Images/FR/NR/33/a7/1b/1812275/1540-1/tsp20190918082425/Jeanne.jpg'


            ],[

              'name'=> 'Archimag',
              'price'=> '14',
              'description'=>'Aumerl',
              'category'=>'Conte roumain',
              'gallery'=>'https://archimag.com/sites/archimag.com/files/styles/uc_product/public/couvertures_mensuels/Couv314.jpg?itok=sgGl2elU'
            ]
            ]);

    }
}
