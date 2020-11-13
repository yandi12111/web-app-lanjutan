<?php

namespace App\Http\Controllers;

class NewYnController extends Controller
{
	public function yn()
	{
		return view("yn");
	}

	public function yandi()
	{
		return view("yandi");
	}

	public function azhar()
	{
		return view("azhar");
	}

	public function index()
 	{
 		return view("test-tema"); // view dengan template
 	}

}