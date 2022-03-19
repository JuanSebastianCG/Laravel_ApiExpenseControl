<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        $user = Auth()->user();

        $incomes = $user->incomes()
        ->orderBy('created_at', 'desc')->get();
        ;

        $expenses = $user->expenses()
        ->orderBy('created_at', 'desc')->get();
        ;

        $collections=collect(array_merge($incomes->all(),$expenses->all()))->sortByDesc('created_at');

        return view('home', compact('collections', 'user'));
    }
}
