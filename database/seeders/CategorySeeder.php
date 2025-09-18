<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Categories = [
            [
            'cat_name' => 'Makanan','description' => 'Menu makanan '],
            ['cat_name' => 'Minuman','description' => 'Menu minuman'],
            
        ];

        DB::table('categories')->insert($Categories);
    }
}
