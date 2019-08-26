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
  <form method="post" action="#" name="frmPerfiles" id="frmPerfiles">
    {!! csrf_field() !!}




    <!-- Inicio bloque no visible -->
    <div class="row">
      <div class="form-group col-sm-12">
        <div style="display:none;" id="loadingDiv"> <p align="center"><label>Por favor espere</label></p> </div>
      </div>
    </div>
    <!-- FIN bloque no visible -->
    <!-- Inicio bloque 2 -->
    <div class="form-group col-sm-12" id="erroresjs"> </div>
    <!-- Fin bloque 2 -->
    <!-- Inicio bloque 3 -->
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
              <table id="tabla_usuarios" class="table hover_gris">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">CORREO</th>
                    <th scope="col">ROL</th>
                  </tr>
                </thead>
                <tfoot class="thead-dark">
                  <tr>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">CORREO</th>
                    <th scope="col">ROL</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
    <!-- Fin bloque 3 -->
    <!-- Inicio bloque 4 -->
    <div class="form-group col-sm-12">
      <div id="errores">
        @if ($errors->any())
          <div class="alert alert-danger alert-dismissible fade in">
            <ul>
          @foreach ($errors->all() as $error)
              <li><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ $error }}</li>
          @endforeach
            </ul>
          </div>
        @endif
      </div>
    </div>
    <!-- Fin bloque 4 -->
  </form>
@stop

@section('css')
  <link href="{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/datatables/datatables.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet">

@stop


@section('js')
  <script src="{{ asset('plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/organizador/comun/select2.js') }}" type="text/javascript"></script>
@stop
