<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class HomepageController extends Controller
{
    //fungsi untuk menampilkan homepage
    public function index()
    {
        $categories = Categories::all();

        return view('web.homepage',['categories' => $categories,]); 
    }

    //fungsi untuk menampilkan produk
    public function products()
    {
        return view('web.products');
    }
    public function producT($slug)
    {
        return view('web.product', ['slug' => $slug]);
    }
    //fungsi untuk menampilkan kategori
    public function categories()
    {
        return view('web.categories');
    }
    public function category($slug)
    {
        $category = Categories::find($slug);
        return view('web.category_by_slug', ['slug' => $slug, 'category' =>
        $category]);
    }
    //fungsi untuk menampilkan keranjang
    public function cart()
    {
        return view('web.cart');
    }
    //fungsi untuk menampilkan checkout
    public function checkout()
    {
        return view('web.checkout');
    }
}
