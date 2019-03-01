<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes
	//display articles
$app->get("/", \App\Controllers\PagesController::class . ":home");
	//add article
$app->post('/add', \App\Controllers\ArticlesController::class . ":add")->setName('add');
	// delete
$app->delete('/del/{id}', \App\Controllers\ArticlesController::class . ":del")->setName('del');

	//display edit
$app->get("/article/edit/{id}", \App\Controllers\ArticlesController::class . ":edit")->setName('edit');
	// update
$app->put('/article/{id}', \App\Controllers\ArticlesController::class . ":upd")->setName('update');

  //register
$app->get('/register', \App\Controllers\RegisterController::class . ":register" )->setName('register');
$app->post('/submit/register', \App\Controllers\RegisterController::class . ":subreg" );
 //Login
$app->get('/login', \App\Controllers\LoginController::class . ":login" )->setName('login');
$app->post('/submit/login', \App\Controllers\LoginController::class . ":sublogin" );

$app->get('/logout', \App\Controllers\LogoutController::class . ":logout" )->setName('logout');

$app->get('/profile', \App\Controllers\ProfileController::class . ":diplayProfile" )->setName('profile');
$app->get('/editprofile', \App\Controllers\ProfileController::class . ":editProfile" )->setName('editprofile');
$app->post('/submitchanges', \App\Controllers\ProfileController::class . ":submitchanges" )->setName('submitchanges');
