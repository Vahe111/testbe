<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('carts')->insert([
            [
                'name' => 'product name 1',
                'sku' => 'unique1',
                'price' => 234.6
            ],
            [
                'name' => 'product name 2',
                'sku' => 'unique2',
                'price' => 12.7
            ],
            [
                'name' => 'product name 3',
                'sku' => 'unique3',
                'price' => 345.6
            ],
            [
                'name' => 'product name 4',
                'sku' => 'unique4',
                'price' => 456.3
            ],
            [
                'name' => 'product name 5',
                'sku' => 'unique5',
                'price' => 345
            ],
        ]);
    }
}
