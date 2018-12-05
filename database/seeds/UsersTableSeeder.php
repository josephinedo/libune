<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'password' => bcrypt('secret'),
            'email' => 'admin@test.com',
            'remember_token' => str_random(10),
        ]);


        factory(App\User::class, 30)->create()->each(function ($user) {
                $user->books()->save(factory(App\Book::class)->make());
            });
    }
}
