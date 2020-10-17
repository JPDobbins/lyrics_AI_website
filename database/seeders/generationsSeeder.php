<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\generation;

class generationsSeeder extends Seeder
{
    /**
     * 
     * @return void
     */
    public function run()
    {

        $users = User::all();
        for ($i = 0; $i < 10; ++$i) {
            DB::table('generations')->insert([
                'user_id'=> $users->random()->id,
                'lyrics'=>Str::random(10),
                'user_rating'=>Str::random(10),
                'made_public'=>rand(0,1)

                //'name' => Str::random(10),
                //'email' => Str::random(10).'@gmail.com',
                //'password' => Hash::make('password'),
            ]);
        };




        //  variable $users contains all data from user table
        /**$users = User::all();

        for ($i = 0; $i < 10; ++$i) {
            generation::create([
                'user_id'=> $users->random()->id,
                'lyrics'=>Str::random(10),
                'user_rating'=>Str::random(10)
            ]);
        }; 
        */
    }
}
