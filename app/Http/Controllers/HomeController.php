<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users  = User::get();
        // dd($users );
        $test = User::onlyTrashed()->get();
        return view('home',['users' => $users ]
                          ,['types' => $test ]
                );
    }
    public function deleteUser (Request $request)
    {
      $id = $request->id;
      User::find($id)->delete();
      return back();
    }
    public function restoreUser(Request $request)
    {
      $id = $request->id;
      User::withTrashed()
            ->where('id', $id)
            ->restore();
      
      return back();
    }
}
