<?php

namespace App\Models;

use App\Core\App;
use App\Core\Database\QueryBuilder;
use App\Core\Request;


class Users extends QueryBuilder
{

	protected $table = 'users';

	protected $fillables = [

		'email',

		'firstname',

		'lastname',

		'image'

	];

	public function getUsers()
	{

		return $this->select()->get();

	}






}
