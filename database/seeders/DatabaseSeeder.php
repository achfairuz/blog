<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\post;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);





        //         post::create([

        //             'title' => 'UI design Web',
        //             'author_id' => 1,
        //             'category_id' => 1,
        //             'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbXpEYhTbNYWdEN_V7VQWWzU3qFGV_fr-NbQ&s',
        //             'slug' => 'artikel-1',
        //             'body' => 'Untuk membuat migration caranya kita bisa menggunakan perintah php artisan seperti sebelum-sebelumnya. dimana sebelumnya juga sudah dijelaskan tentang pengertian php artisan. dimana php artisan merupakan perintah  atau kata kunci untuk menjalankan perintah-perintah laravel melalui command line atau terminal.

        // oh ya, jangan lupa melakukan konfigurasi database terlebih dulu pada file .env.

        // Silahkan buat database dan sesuaikan pengaturan koneksi databasenya pada file .env ini. di sini saya sudah memiliki database dengan nama belajar_laravel.'

        //         ]);


        $this->call([
            CategorySeeder::class,
            UserSeeder::class
        ]);

        post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
