<?php

namespace App\Http\Controllers;

use App\Http\Requests\Searchrequest;
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
        $this->middleware('auth') -> except('index', 'search');
    }

    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
    public function search(?string $params = null, Searchrequest $request)
    {
        return view('search', [
            'busca' => $params,
            'params' => $request->get('params')
        ]);
    }     

    public function dashboard()
    {
        return view('dashboard');
    }
}
