@extends('adminlte::page')

@section('title', 'Organizador')

@section('content_header')
  <h1>Agregar</h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="active">Organizador</li>
    <li class="active">Perfiles</li>
    <li class="active">Agregar</li>
  </ol>
@stop

@section('content')
  <form method="post" action="#" name="frmPerfiles" id="frmPerfiles">
    {!! csrf_field() !!}
    <!-- Inicio bloque 1 -->
    <div class="row">
      <div class="form-group col-sm-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Nuevo usuario</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div><!-- FIN box-header -->
          <div class="box-body">
            <div class="row">
              <div class="form-group col-sm-6">
                <label for="optRoles">Rol</label>
                <select class="form-control optRolescss"  id="optRoles" name="optRoles">
                  <option value=""></option>
                  @foreach($Roles as $key=>$Rol)
                    <option value="{{ $Rol->id_rol }}">{{ $Rol->nombre_rol }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-sm-6">
                <label for="email">Corre electónico</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                  <input id="email" name="email"  type="email" class="form-control" placeholder="Email" required>
                </div>


              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-6">
                <label for="nombreusr">Nombre</label>
                <input id="nombreusr" name="nombreusr" class="form-control" type="text" placeholder="" value="" required>
              </div>
              <div class="form-group col-sm-6">
                <label for="apellidousr">Apellido</label>
                <input id="apellidousr" name="apellidousr" class="form-control" type="text" placeholder="" value="" required>
              </div>
            </div>
          </div><!-- FIN box-body -->
          <div class="box-footer">
            <div class="row">
              <div class="form-group col-md-4">
						  </div>
               <div class="form-group col-md-4">
                 <div class="btn-group btn-group-justified" role="group">
     			        <div class="btn-group" role="group">
   		                <button type="reset" class="btn btn-default form-control">Limpiar <i class="glyphicon glyphicon-erase"></i></button>
     			        </div>
     			        <div class="btn-group" role="group">
     			            <button type="submit" class="btn btn-success form-control" formaction="#">Guardar <i class="glyphicon glyphicon-floppy-save"></i></button>
     			        </div>
   						  </div>
  						 </div>
              <div class="form-group col-md-4">
              </div>
            </div>
          </div><!-- FIN box-footer -->
        </div><!-- FIN box -->
      </div>
    </div>
    <!-- FIN bloque 1 -->



    <!-- Inicio bloque 2 -->
    <div class="form-group col-sm-12" id="erroresjs"> </div>
    <!-- Fin bloque 2 -->
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
  <link href="{{ asset('plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet">

@stop


@section('js')

  <script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/organizador/comun/select2.js') }}" type="text/javascript"></script>
@stop
