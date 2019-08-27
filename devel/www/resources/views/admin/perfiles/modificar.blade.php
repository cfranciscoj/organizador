@extends('adminlte::page')

@section('title', 'Organizador')

@section('content_header')
  <h1>Modificar</h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="active">Organizador</li>
    <li class="active">Perfiles</li>
    <li class="active">Modificar</li>
  </ol>
@stop

@section('content')
  <form method="post" action="#" name="frmmodificar" id="frmmodificar">
    {!! csrf_field() !!}
    <input type="hidden" id="rutausuario" value="{{ route('getuser') }}">
    <!-- Inicio bloque 1 -->
    <div class="row">
      <div class="form-group col-sm-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Listado de usuario</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="all_search">
              <div class="table-responsive-md">
                <table id="tabla_usuarios" class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">NOMBRE</th>
                      <th scope="col">APELLIDO</th>
                      <th scope="col">CORREO</th>
                      <th scope="col">ROL</th>
                      <th scope="col">FECHA CREACIÓN</th>
                      <th scope="col">&nbsp;</th>
                      <th scope="col">&nbsp;</th>
                    </tr>
                  </thead>
                  <tfoot class="thead-dark">
                    <tr>
                      <th scope="col">NOMBRE</th>
                      <th scope="col">APELLIDO</th>
                      <th scope="col">CORREO</th>
                      <th scope="col">ROL</th>
                      <th scope="col">FECHA CREACIÓN</th>
                      <th scope="col">&nbsp;</th>
                      <th scope="col">&nbsp;</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
    <!-- Fin bloque 1 -->
  </form>
@stop

@section('css')
  <link href="{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/datatables/datatables.min.css') }}" rel="stylesheet">


@stop


@section('js')
  <script src="{{ asset('plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/organizador/perfil/admin/modifica.js') }}" type="text/javascript"></script>
@stop
