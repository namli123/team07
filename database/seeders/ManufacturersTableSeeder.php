<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *
    */
     //@return void
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
    public function generateRandomNational() {
        $National = ['美國', '英國', '俄國', '法國'];
        return $National[rand(0, count($National)-1)];

    }
    public function run()
    {
        for ($i=0; $i<100; $i++)
        {
            $name = $this->generateRandomName();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
            $national = $this->generateRandomNational();
            DB::table('manufacturers')->insert([
                'name' => $name,
                'capital' => rand(10, 100),
                'found_at' => $random_datetime,
                'national' => $national,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
