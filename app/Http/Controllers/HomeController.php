<?php

namespace App\Http\Controllers;

use App\Models\ItemSell;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }
    public function mainShop()
    {
        return view('shop', [
            'items' => ItemSell::query()
                ->with('category','store','images')
                ->where('item_quantity','!=',0)
                ->get()
        ]);
    }
}
