<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
      // if (!Auth::check()) {
      //   # code...
      //   return "Please login to access. Click <a href='/'>here </a> to visit login page";
      // }
        return view('ui.index')->with('title',"Rezeptra");
    }

  public function loginuser(Request $request)
  {
      # code...
    
  }
}
