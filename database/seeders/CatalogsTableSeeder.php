<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CatalogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogs')->insert([
            'name' => "freefire",
            'mid' => "2",
            'price' => "900",
            'evaluaation' => "4",
            'issue_date' => "2000-01-02",
            'revenue' => "90000000000",
            'game_type' => "行動",
        ]);
    }
}
