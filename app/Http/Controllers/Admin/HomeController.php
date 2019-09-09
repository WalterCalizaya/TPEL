<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Carbon\Carbon;

use App\User;
use App\Models\Evento;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proximos=Evento::where('estado',1)->where('vigencia','!=',0)->orderBy('inicio','asc')->take(10)->get();
        $newUsers=User::where('tipo',2)->orderBy('created_at','desc')->take(10)->get();
        return view('admin.dashboard.index')
            ->with('proximos',$proximos)
            ->with('users',$newUsers);
    }
}
