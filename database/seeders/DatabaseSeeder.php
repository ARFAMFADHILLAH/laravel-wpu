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
    public function run()
    {
        User::factory(5)->create();


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'Web programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(10)->create();

//     Post::create([
//    'title' => 'Judul Pertama',
//          'slug' => 'judul-pertama',
//         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum doloremque cupiditate officia',
//         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum doloremque cupiditate officia dicta quia similique labore natus debitis, ut veritatis dolorum ad vero fugiat recusandae amet temporibus omnis earum quis! Suscipit nesciunt nihil harum laborum hic, deserunt eum et architecto amet magnam accusamus aperiam dicta illo ut? Necessitatibus deserunt impedit quibusdam deleniti quaerat minima placeat iusto ipsam? Rerum molestiae repellendus nihil explicabo enim incidunt doloribus nisi. Unde illum modi tempora dolore magnam accusamus, ut placeat excepturi, quasi repellendus ipsam vitae, quae quod quisquam neque adipisci! Ab, tempora minima exercitationem, eaque cupiditate soluta beatae quaerat iste perferendis quod atque ullam ut.',
//        'category_id' => 1,
//          'user_id' => 1
//     ]);
//     Post::create([
//         'title' => 'Judul Kedua',
//         'slug' => 'judul-kedua',
//         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum doloremque cupiditate officia',
//         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum doloremque cupiditate officia dicta quia similique labore natus debitis, ut veritatis dolorum ad vero fugiat recusandae amet temporibus omnis earum quis! Suscipit nesciunt nihil harum laborum hic, deserunt eum et architecto amet magnam accusamus aperiam dicta illo ut? Necessitatibus deserunt impedit quibusdam deleniti quaerat minima placeat iusto ipsam? Rerum molestiae repellendus nihil explicabo enim incidunt doloribus nisi. Unde illum modi tempora dolore magnam accusamus, ut placeat excepturi, quasi repellendus ipsam vitae, quae quod quisquam neque adipisci! Ab, tempora minima exercitationem, eaque cupiditate soluta beatae quaerat iste perferendis quod atque ullam ut.',
//         'category_id' => 1,
//         'user_id' => 1
//     ]);
//      Post::create([
//         'title' => 'Judul Ketiga',
//        'slug' => 'judul-ketiga',
//         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum doloremque cupiditate officia',
//         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum doloremque cupiditate officia dicta quia similique labore natus debitis, ut veritatis dolorum ad vero fugiat recusandae amet temporibus omnis earum quis! Suscipit nesciunt nihil harum laborum hic, deserunt eum et architecto amet magnam accusamus aperiam dicta illo ut? Necessitatibus deserunt impedit quibusdam deleniti quaerat minima placeat iusto ipsam? Rerum molestiae repellendus nihil explicabo enim incidunt doloribus nisi. Unde illum modi tempora dolore magnam accusamus, ut placeat excepturi, quasi repellendus ipsam vitae, quae quod quisquam neque adipisci! Ab, tempora minima exercitationem, eaque cupiditate soluta beatae quaerat iste perferendis quod atque ullam ut.',
//        'category_id' => 2,
//        'user_id' => 1
//     ]);
//      Post::create([
//         'title' => 'Judul Keempat',
//         'slug' => 'judul-keempat',
//        'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum doloremque cupiditate officia',
//        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum doloremque cupiditate officia dicta quia similique labore natus debitis, ut veritatis dolorum ad vero fugiat recusandae amet temporibus omnis earum quis! Suscipit nesciunt nihil harum laborum hic, deserunt eum et architecto amet magnam accusamus aperiam dicta illo ut? Necessitatibus deserunt impedit quibusdam deleniti quaerat minima placeat iusto ipsam? Rerum molestiae repellendus nihil explicabo enim incidunt doloribus nisi. Unde illum modi tempora dolore magnam accusamus, ut placeat excepturi, quasi repellendus ipsam vitae, quae quod quisquam neque adipisci! Ab, tempora minima exercitationem, eaque cupiditate soluta beatae quaerat iste perferendis quod atque ullam ut.',
//         'category_id' => 2,
//     'user_id' => 2
//      ]);
 }
}
