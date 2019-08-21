<?php

namespace Org\Http\Controllers\Admin\Usuario;

use Illuminate\Http\Request;
use Org\Http\Controllers\Controller;

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
        return view('admin/usuario/perfiles');
    }

}
