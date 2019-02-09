<?php

use App\Core\App;
use App\Core\Database\QueryBuilder;


App::bind('config', require 'config.php');


function view($name, $data=[])
{
	extract($data);

	return require "app/views/{$name}.view.php";
}


function redirect($path)
{
	header("Location: /{$path}");
}
