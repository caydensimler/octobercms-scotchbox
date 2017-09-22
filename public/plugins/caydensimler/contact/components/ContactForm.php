<?php namespace CaydenSimler\Contact\Components;


use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;

class ContactForm extends ComponentBase {

	public function componentDetails() {
		return [
			'name' => 'Contact Form',
			'description' => 'Simple contact form.'
		];

	}


	public function onSend() {

		$validator = Validator::make(
			[
				'name' => Input::get('name'),
				'email' => Input::get('email'),
				'message' => Input::get('message')
			],
			[
				'name' => 'required',
				'email' => 'required|email|unique:users',
				'message' => 'required'
			]
		);


		if($validator->fails()) {
			return Redirect::back()->withErrors($validator);
		} else {
			$vars = ['name' => Input::get('name'), 'email' => Input::get('email'), 'message' => Input::get('message')];

			Mail::send('caydensimler.contact::mail.message', $vars, function($message) {
				$message->to('cayden@tiqiq.com', 'Admin Person');
				$message->subject('New message from contact form.');
			});
		}

	}


}