<?php
$app['router']->get('/', function () {
	return "<h1>路由成功！welcome to the php-framework-scaffolding</h1>";
});
$app['router']->get('welcome', 'App\Http\Controllers\WelcomeController@index');
