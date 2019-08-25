@extends('adminlte::page')

@section('title', 'Organizador')

@section('content_header')
  <h1>Perfiles</h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="active">Organizador</li>
    <li class="active">Perfiles</li>
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
                <select class="form-control" id="optRoles" name="optRoles">
                  <option value="0">Seleccione</option>
                  @foreach($Roles as $key=>$Rol)
                    <option value="{{ $Rol->id_rol }}">{{ $Rol->nombre_rol }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-sm-6">
                <label for="email">Corre electónico</label>
                <input id="email" name="email" class="form-control" type="email" placeholder="algo@algo.com..." value="" required>
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
        </div><!-- FIN box -->
      </div>
    </div>
    <!-- FIN bloque 1 -->



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
                    <th scope="col">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </th>
                    <th scope="col">RUT</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">CORREO</th>
                    <th scope="col">ENTIDAD</th>
                  </tr>
                </thead>
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
