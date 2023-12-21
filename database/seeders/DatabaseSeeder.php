<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Imam H',
        //     'username' =>'ImamHambali',
        //     'email' => 'imamH@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Xavier M',
        //     'email' => 'xavier@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::factory(3)->create();

        Category::create([
            'name' => 'Teknologi',
            'slug' => 'teknologi'
        ]);

        Category::create([
            'name' => 'Olahraga',
            'slug' => 'olahraga'
        ]);

        Category::create([
            'name' => 'Kuliner',
            'slug' => 'kuliner'
        ]);

        Category::create([
            'name' => 'Kesehatan',
            'slug' => 'kesehatan'
        ]);

        Category::create([
            'name' => 'Otomotif',
            'slug' => 'otomotif'
        ]);

        // Post::factory(20)->create();

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error eos est a cumque laborum inventore eum adipisci recusandae,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error eos est a cumque laborum inventore eum adipisci recusandae, repudiandae possimus, veniam libero doloribus aliquam mollitia esse harum. Aut, ut porro quas itaque debitis pariatur est dignissimos maxime quisquam autem nobis similique quia dolorum, libero ad, sit voluptate eaque fugit aperiam ex. Doloremque necessitatibus veritatis voluptatem eius a obcaecati voluptate consectetur enim ipsa quibusdam porro, non vel earum officiis neque impedit fugit qui ex odit cum maxime animi? Mollitia, illo commodi eum praesentium similique maxime quis, pariatur aliquam maiores ea eligendi consectetur sequi hic autem facilis, quibusdam alias incidunt exercitationem? Tenetur!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error eos est a cumque laborum inventore eum adipisci recusandae,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error eos est a cumque laborum inventore eum adipisci recusandae, repudiandae possimus, veniam libero doloribus aliquam mollitia esse harum. Aut, ut porro quas itaque debitis pariatur est dignissimos maxime quisquam autem nobis similique quia dolorum, libero ad, sit voluptate eaque fugit aperiam ex. Doloremque necessitatibus veritatis voluptatem eius a obcaecati voluptate consectetur enim ipsa quibusdam porro, non vel earum officiis neque impedit fugit qui ex odit cum maxime animi? Mollitia, illo commodi eum praesentium similique maxime quis, pariatur aliquam maiores ea eligendi consectetur sequi hic autem facilis, quibusdam alias incidunt exercitationem? Tenetur!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error eos est a cumque laborum inventore eum adipisci recusandae,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error eos est a cumque laborum inventore eum adipisci recusandae, repudiandae possimus, veniam libero doloribus aliquam mollitia esse harum. Aut, ut porro quas itaque debitis pariatur est dignissimos maxime quisquam autem nobis similique quia dolorum, libero ad, sit voluptate eaque fugit aperiam ex. Doloremque necessitatibus veritatis voluptatem eius a obcaecati voluptate consectetur enim ipsa quibusdam porro, non vel earum officiis neque impedit fugit qui ex odit cum maxime animi? Mollitia, illo commodi eum praesentium similique maxime quis, pariatur aliquam maiores ea eligendi consectetur sequi hic autem facilis, quibusdam alias incidunt exercitationem? Tenetur!',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error eos est a cumque laborum inventore eum adipisci recusandae,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error eos est a cumque laborum inventore eum adipisci recusandae, repudiandae possimus, veniam libero doloribus aliquam mollitia esse harum. Aut, ut porro quas itaque debitis pariatur est dignissimos maxime quisquam autem nobis similique quia dolorum, libero ad, sit voluptate eaque fugit aperiam ex. Doloremque necessitatibus veritatis voluptatem eius a obcaecati voluptate consectetur enim ipsa quibusdam porro, non vel earum officiis neque impedit fugit qui ex odit cum maxime animi? Mollitia, illo commodi eum praesentium similique maxime quis, pariatur aliquam maiores ea eligendi consectetur sequi hic autem facilis, quibusdam alias incidunt exercitationem? Tenetur!',
            'category_id' => 2,
            'user_id' => 2
        ]);

    }
}
