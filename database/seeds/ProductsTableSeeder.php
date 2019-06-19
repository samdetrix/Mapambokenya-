<?php
use App\Products;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
        'name'=>'Earrings',
        'slug'=>'Ear',
        'details'=>'flashy made',
        'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
        'price'=>'200',
        ]);
        Products::create([
            'name'=>'watches',
            'slug'=>'mens',
            'details'=>'both ankara and leather made',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'price'=>'100',
        ]);
        Products::create([
            'name'=>'belly rings',
            'slug'=>'beads',
            'details'=>'silver made',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'price'=>'150',
        ]);
        Products::create([
            'name'=>'Tie clips',
            'slug'=>'tie',
            'details'=>'kenyan made',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'price'=>'300',
       ]); 
       Products::create([
        'name'=>'anklets',
        'slug'=>'ladies',
        'details'=>'all sizes made',
        'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
        'price'=>'50',
        ]);
        Products::create([
            'name'=>'brooch',
            'slug'=>'brochy',
            'details'=>'casual made',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'price'=>'250',
            ]);                          
    }
}
