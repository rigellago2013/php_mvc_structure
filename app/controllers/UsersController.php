<?php

namespace App\Controllers;

use App\Models\Users;
use App\Models\Product;
use App\Models\Category;

class UsersController
{

	protected $users;

	protected $products;

	protected $category;

	public function __construct()
	{
		$this->users = new Users();
	}

	public function index()
	{
		$catlist = $this->category->getCategories();

		if ($catlist) {

			return view('client/index', compact('catlist'));

		}

	}

	public function show($_GET['id'])
	{
		$prodlist = $this->products->getProductsByCategory($_GET['id']);

	}




}
