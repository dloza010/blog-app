<?php

	namespace App\Models;

	use Illuminate\Database\Eloquent\ModelNotFoundException;
	use Illuminate\Support\Facades\File;
	use Spatie\YamlFrontMatter\YamlFrontMatter;

	class Post
	{
		public $title;
		public $excerpt;
		public $date;
		public $body;
		public $slug;

		/**
		 * @param $title
		 * @param $excerpt
		 * @param $date
		 * @param $body
		 */
		public function __construct($title, $excerpt, $date, $body, $slug)
		{
			$this->title = $title;
			$this->excerpt = $excerpt;
			$this->date = $date;
			$this->body = $body;
			$this->slug = $slug;
		}

		public static function find($slug)
		{
				//find the post with the matching slug

			$posts = static::all();

			return $posts->firstWhere('slug', $slug);
		}

		public static function all()
		{

			return cache()->rememberForever('posts.all', function (){
				$files = File::files(resource_path('posts'));
				return collect($files)
					->map(fn ($file) => YamlFrontMatter::parseFile($file))
					->map(fn ($document) => new Post(
						$document->title,
						$document->excerpt,
						$document->date,
						$document->body(),
						$document->slug
					))
					->sortByDesc('date');
			});

		}

	}