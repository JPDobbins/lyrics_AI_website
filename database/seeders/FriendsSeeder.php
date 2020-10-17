<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\User;

class FriendsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        for ($i = 0; $i < 10; ++$i) {
            DB::table('friends')->insert([
                'user_id'=> $users->random()->id,
                'user_link'=> $users->random()->id
                

                //'name' => Str::random(10),
                //'email' => Str::random(10).'@gmail.com',
                //'password' => Hash::make('password'),
            ]);
        };
    }
}
