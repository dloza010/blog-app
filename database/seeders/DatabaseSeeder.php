<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
			User::truncate();
			Category::truncate();
			Post::truncate();

			$user = User::factory()->create([
				'name' => 'John Doe'
			]);

			Post::factory(5)->create([
				'user_id' => $user->id
			]);

//			//create 1 user
//	    $user = User::factory(1)->create();
//
//			$personal = Category::create([
//				'name' => 'Personal',
//				'slug' => 'personal'
//			]);
//
//	    $family = Category::create([
//		    'name' => 'Family',
//		    'slug' => 'family'
//	    ]);
//
//	    $work = Category::create([
//		    'name' => 'Work',
//		    'slug' => 'work'
//	    ]);
//
//			Post::create([
//				'user_id' => $user->get(0)->id,
//				'category_id' => $family->id,
//				'title' => 'My First Post',
//				'slug' => 'my-first-post',
//				'excerpt' => 'Lorem ipsum dolar sit amet.',
//				'body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum purus non nisl accumsan, non vestibulum mauris consequat. Quisque sagittis nibh sapien, a tristique ipsum placerat sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in finibus ipsum. Nullam tincidunt placerat sodales. Vivamus enim elit, sodales eu lectus ac, condimentum fermentum turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis sagittis metus sem, in mollis ante euismod non.</p>"
//			]);
//
//	    Post::create([
//		    'user_id' => $user->get(0)->id,
//		    'category_id' => $work->id,
//		    'title' => 'My Second Post',
//		    'slug' => 'my-second-post',
//		    'excerpt' => 'Lorem ipsum dolar sit amet.',
//		    'body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum purus non nisl accumsan, non vestibulum mauris consequat. Quisque sagittis nibh sapien, a tristique ipsum placerat sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in finibus ipsum. Nullam tincidunt placerat sodales. Vivamus enim elit, sodales eu lectus ac, condimentum fermentum turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis sagittis metus sem, in mollis ante euismod non.</p>"
//	    ]);

//	    Post::create([
//		    'user_id' => $user->id,
//		    'category_id' => $personal->id,
//		    'title' => 'My Third Post',
//		    'slug' => 'my-third-post',
//		    'excerpt' => 'Lorem ipsum dolar sit amet.',
//		    'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum purus non nisl accumsan, non vestibulum mauris consequat. Quisque sagittis nibh sapien, a tristique ipsum placerat sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in finibus ipsum. Nullam tincidunt placerat sodales. Vivamus enim elit, sodales eu lectus ac, condimentum fermentum turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis sagittis metus sem, in mollis ante euismod non.'
//	    ]);
    }
}
