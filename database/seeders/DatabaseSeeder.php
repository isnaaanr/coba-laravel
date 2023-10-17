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

        User::create([
            'name'  => 'Isnanisa Rasyidah',
            'username'  => 'isnanisarasyidah',
            'email' => 'isna@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name'  => 'IR',
        //     'email' => 'ir@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, fugiat adipisci dignissimos accusantium veritatis porro obcaecati architecto tempore ratione ipsum sapiente iste mollitia similique numquam sed assumenda expedita corrupti provident.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum ipsa aspernatur illo expedita! Laboriosam quod quibusdam incidunt ex a, quam et iste fuga beatae officiis quia cumque eum hic aspernatur consectetur repellat temporibus aliquam architecto placeat ea illum alias. Deleniti repudiandae, magni perferendis aspernatur laboriosam, veritatis iusto pariatur in animi fugit iste inventore modi reprehenderit, similique omnis distinctio minima et? Velit, ab molestiae, asperiores consequuntur nihil vel et accusamus laborum quam cumque dolores autem voluptatibus fugit a quo. Aut, sint?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, fugiat adipisci dignissimos accusantium veritatis porro obcaecati architecto tempore ratione ipsum sapiente iste mollitia similique numquam sed assumenda expedita corrupti provident.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum ipsa aspernatur illo expedita! Laboriosam quod quibusdam incidunt ex a, quam et iste fuga beatae officiis quia cumque eum hic aspernatur consectetur repellat temporibus aliquam architecto placeat ea illum alias. Deleniti repudiandae, magni perferendis aspernatur laboriosam, veritatis iusto pariatur in animi fugit iste inventore modi reprehenderit, similique omnis distinctio minima et? Velit, ab molestiae, asperiores consequuntur nihil vel et accusamus laborum quam cumque dolores autem voluptatibus fugit a quo. Aut, sint?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, fugiat adipisci dignissimos accusantium veritatis porro obcaecati architecto tempore ratione ipsum sapiente iste mollitia similique numquam sed assumenda expedita corrupti provident.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum ipsa aspernatur illo expedita! Laboriosam quod quibusdam incidunt ex a, quam et iste fuga beatae officiis quia cumque eum hic aspernatur consectetur repellat temporibus aliquam architecto placeat ea illum alias. Deleniti repudiandae, magni perferendis aspernatur laboriosam, veritatis iusto pariatur in animi fugit iste inventore modi reprehenderit, similique omnis distinctio minima et? Velit, ab molestiae, asperiores consequuntur nihil vel et accusamus laborum quam cumque dolores autem voluptatibus fugit a quo. Aut, sint?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, fugiat adipisci dignissimos accusantium veritatis porro obcaecati architecto tempore ratione ipsum sapiente iste mollitia similique numquam sed assumenda expedita corrupti provident.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum ipsa aspernatur illo expedita! Laboriosam quod quibusdam incidunt ex a, quam et iste fuga beatae officiis quia cumque eum hic aspernatur consectetur repellat temporibus aliquam architecto placeat ea illum alias. Deleniti repudiandae, magni perferendis aspernatur laboriosam, veritatis iusto pariatur in animi fugit iste inventore modi reprehenderit, similique omnis distinctio minima et? Velit, ab molestiae, asperiores consequuntur nihil vel et accusamus laborum quam cumque dolores autem voluptatibus fugit a quo. Aut, sint?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        
    }
}
