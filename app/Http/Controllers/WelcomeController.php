<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Container\Container;
use Illuminate\Database;
use Illuminate\Support\Facades\DB;

class WelcomeController
{
	public function index()
	{
		$test = User::first();
		$data = $test->getAttributes();

		$app = Container::getInstance();
		$factory = $app->make('view');
		// echo __NAMESPACE__;
		// echo PHP_VERSION_ID;

		return $factory->make('welcome')->with('data', $data);
	}
}
