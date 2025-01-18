<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //? buat 10 user dgn factory
        // User::factory(10)->create();

        //? buat 10 user  factory tapi field name diisi 'Test User'
        // User::factory(10)->create([
        //     'name' => 'Test User',
        // ]);

        //? buat 100 post, 3 category dan 5 user dgn factory
        // Post::factory(100)->recycle([
        //     Category::factory(3)->create(),
        //     User::factory(5)->create()
        // ])->create();

        //? buat 1 user, category dan post manual tanpa factory
        // User::create([
        //     'name' => 'Ardy Wirasaputra',
        //     'username' => 'ardywsptr',
        //     'email' => 'ardywsptr@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10),
        // ]);

        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design',
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Pertama',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-post-pertama',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
        // ]);

        //? buat 2 user manual tanpa factory menggunakan loop
        // $users = 
        // [
        //     [
        //         'name' => 'Ardy Wirasaputra',
        //         'username' => 'ardywsptr',
        //         'email' => 'ardywsptr@gmail.com',
        //     ],
        //     [
        //         'name' => 'Cici Awalia',
        //         'username' => 'ciciawa',
        //         'email' => 'ciciaw@gmail.com',
        //     ]
        // ];

        // foreach ($users as $user){
        //     User::create([
        //         'name' => $user['name'],
        //         'username' => $user['username'],
        //         'email' => $user['email'],
        //         'email_verified_at' => now(),
        //         'password' => Hash::make('password'),
        //         'remember_token' => Str::random(10),
        //     ]);
        // };

        //? buat 100 post, 3 category dan 4 user dgn factory tapi menyelipkan 1 user secara manual
        // $userArdy = User::create([
        //     'name' => 'Ardy Wirasaputra',
        //     'username' => 'ardywsptr',
        //     'email' => 'ardywsptr@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10),
        // ]);
        
        // Post::factory(100)->recycle([
        //     Category::factory(3)->create(),
        //     $userArdy,
        //     User::factory(4)->create()
        // ])->create();

        //? jika ingin pisahkan masing2 tabel ke dalam file seeder sendiri, dan panggil di seeder utama (DatabaseSeeder):
        $this->call([
            PostSeeder::class,
        ]);
    }
}
