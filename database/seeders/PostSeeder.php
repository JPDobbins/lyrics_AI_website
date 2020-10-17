<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\generation;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $generations = generation::all();

        for ($i = 0; $i < 10; ++$i) {
            DB::table('posts')->insert([
                'post_message'=>Str::random(10),
                'user_id'=>$users->random()->id,
                'lyrics_id'=>$generations->random()->id




                //'user_id'=> $users->random()->id,
                //'lyrics'=>Str::random(10),
                //'user_rating'=>Str::random(10),
                //'made_public'=>rand(0,1)

                //'name' => Str::random(10),
                //'email' => Str::random(10).'@gmail.com',
                //'password' => Hash::make('password'),
            ]);
        };
    }
}
