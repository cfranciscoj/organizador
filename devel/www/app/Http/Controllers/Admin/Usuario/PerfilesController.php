<?php

namespace Org\Http\Controllers\Admin\Usuario;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Org\Http\Controllers\Controller;
use Org\AdminPerfil as Perfil;

class PerfilesController extends Controller
{
    //

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
      //if (Auth::user()->hasRole('admin')) {
        $Perfil = new Perfil;
        $Roles = $Perfil->TraeRol();
        return view('admin/usuario/perfiles')->with(['Roles'=>$Roles]);
      //} else {
      //  return view('home');
      //}
    }

}
