<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::updateOrCreate(['id' => 1], [
        	'title' => 'Test 1',
        	'price' => 10,
        	'quantity' => 5,
        ]);

        Product::updateOrCreate(['id' => 2], [
        	'title' => 'Test 2',
        	'price' => 11,
        	'quantity' => 6,
        ]);

        Product::updateOrCreate(['id' => 3], [
        	'title' => 'Test 3',
        	'price' => 12,
        	'quantity' => 7,
        ]);

        Product::updateOrCreate(['id' => 4], [
        	'title' => 'Test 4',
        	'price' => 12,
        	'quantity' => 7,
        ]);

        Product::updateOrCreate(['id' => 5], [
        	'title' => 'Test 5',
        	'price' => 12,
        	'quantity' => 7,
        ]);

        Product::updateOrCreate(['id' => 6], [
        	'title' => 'Test 6',
        	'price' => 12,
        	'quantity' => 7,
        ]);
    }
}
