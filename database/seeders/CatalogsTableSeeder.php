<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CatalogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *///@return void
     
    public function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function generateRandomName() {
        $first_name = $this->generateRandomString(rand(2, 15));
        $first_name = strtolower($first_name);
        $first_name = ucfirst($first_name);
        $last_name = $this->generateRandomString(rand(2, 15));
        $last_name = strtolower($last_name);
        $last_name = ucfirst($last_name);
        $name = $first_name . " ". $last_name;
        return $name;
    }
    public function generateRandomGameType() {
        $GameType = ['行動', '恐怖', '挑戰', '邏輯'];
        return $GameType[rand(0, count($GameType)-1)];

    }
    public function run()
    {
        for ($i=0; $i<100; $i++) 
        {
            $name = $this->generateRandomName();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
            $gametype = $this->generateRandomGameType();
            DB::table('catalogs')->insert([
                'name' => $name,
                'mid' => rand(1, 100),
                'price' =>  rand(10, 100),
                'evaluaation' => rand(90, 100),
                'issue_date' => $random_datetime,
                'revenue' => rand(10000, 900000),
                'game_type' => $gametype,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
