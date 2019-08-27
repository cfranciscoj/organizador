<?php

namespace Org\Http\Controllers\Admin\Usuario;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\DataTables;
use Yajra\DataTables\DataTablesServiceProvider;
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
        return view('admin/perfiles/agregar')->with(['Roles'=>$Roles]);
      //} else {
      //  return view('home');
      //}
    }

    public function agregar()
    {
      //if (Auth::user()->hasRole('admin')) {
        $Perfil = new Perfil;
        $Roles = $Perfil->TraeRol();
        return view('admin/perfiles/agregar')->with(['Roles'=>$Roles]);
      //} else {
      //  return view('home');
      //}
    }

    public function modificar()
    {
      //if (Auth::user()->hasRole('admin')) {

        return view('admin/perfiles/modificar');
      //} else {
      //  return view('home');
      //}
    }

    public function listausr()
    {
      $Perfil = new Perfil;
      $UsuariosRol = $Perfil->TraeUsuarioRol();
      return DataTables::of($UsuariosRol)->make(true);
    }


}
