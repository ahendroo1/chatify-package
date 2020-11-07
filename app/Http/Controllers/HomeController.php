<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('home');
    }
    public function start_chat(Request $request){
        
        DB::table('messages')->insert([
            "type" => 'user',
            "from_id" => auth()->user()->id,
            "to_id" => 1,
            "body" => $request->message,
            "seen" => 1,
        ]);

        return redirect('/chatify');
    }
}
