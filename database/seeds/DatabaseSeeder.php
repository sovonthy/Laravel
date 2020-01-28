<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // DB::table('posts')->insert([
        //     'title'=>'Code Review',
        //     'body'=>'My favorite subject ever...'
        // ]);
        $faker = Faker::create();
        for ($i = 0; $i <= 1000; $i++) {
        DB::table('students')->insert([
            'firstname'=>$faker->firstname(8),
            'lastname'=>$faker->lastname(10),
            'age'=>$faker->numberBetween($min = 15, $max = 25)
        
        ]);
    }

    }
}
