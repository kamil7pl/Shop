<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\QueryFilters\ProductFilters;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(ProductFilters $filters)
    {
		$products = Product::filterBy($filters)->paginate(9)->appends('name', request('name'));
        return view('home', compact('products'));
    }
}
