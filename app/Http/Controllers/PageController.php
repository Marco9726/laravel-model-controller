<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic as Comic;

class PageController extends Controller
{
	public function show()
	{
		$comics = Comic::all();

		$headerMenu = config('headermenu');

		$footerLists = config('footerlists');

		$socialArray = config('social');

		return view('comics', compact('headerMenu', 'footerLists', 'comics', 'socialArray'));
	}
}
