<?php namespace CaydenSimler\Craigslist\Components;


use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use CaydenSimler\Craigslist\Models\Post;
use Flash;
use Eloquent;
use ValidationException;
use CaydenSimler\Craigslist\Models\PostCategory;

class PostForm extends ComponentBase {

	public function componentDetails() {
		return [
			'name' => 'Post Form',
			'description' => 'Create a post form.'
		];

	}


	static public function slugify($text) {
		$text = preg_replace('~[^\pL\d]+~u', '-', $text);
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
		$text = preg_replace('~[^-\w]+~', '', $text);
		$text = trim($text, '-');
		$text = preg_replace('~-+~', '-', $text);
		$text = strtolower($text);
		if (empty($text)) {
			return 'n-a';
		}
		return $text;
	}


	public function onSave() {

		$data = post();

		$rules = [
			'title' => 'required',
			'price' => 'required|numeric',
			'body' => 'required',
			'email' => 'required|email'
		];

		$validator = Validator::make($data, $rules);

		if ($validator->fails()) {
			throw new ValidationException($validator);
		} else {
			$post = new Post();

			$post->title = Input::get('title');
			$post->price = Input::get('price');
			$post->body = '<p>' . Input::get('body') . '</p>';
			$post->contact_email = Input::get('email');
			$post->created_at = date('Y-m-d H:i:s');
			$post->user_id = Input::get('user_id');
			$post->slug = $this->slugify(Input::get('title'));

			$post->save();

			foreach ($_POST['categories'] as $categoryID) {
				$postCategory = new PostCategory();

				$postCategory->post_id = $post->id;
				$postCategory->category_id = $categoryID;

				$postCategory->save();
			}

			$message = 'Post created! Click <a href="/post/' . $post->slug . '">here </a>to view the listing.';

			Flash::success($message);
			return Redirect::back();
		}

	}


}