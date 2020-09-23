<?php

namespace App\Http\Controllers;

use App\Models\Follow;
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
        Follow::create([
            'follower_id' => '1',
            'following_id' => '2',
            'status' => TRUE
        ]);
        $all_follows = Follow::all()->first();
        return view('home');
    }
}
