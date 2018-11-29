<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">


    @include('adminlte::layouts.partials.htmlheader')
@show


<body class="skin-blue sidebar-mini">
<div id="app">
    <div class="wrapper">

    @include('adminlte::layouts.partials.mainheader')

    @include('adminlte::layouts.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        @include('adminlte::layouts.partials.contentheader')

        <!-- Main content -->
    <div>
      &nbsp;
      &nbsp;
    <td>
      <a href="{{ url('usuarios') }}" class="btn btn-warning">Volver</a></td>
    </td>
    </div>

    <section class="content">
            <!-- Your Page Content Here -->


    <div class="form-group row">
      &nbsp;
      &nbsp;
      <img width="200px" src="{{ Storage::url($usuario->avatar) }}">
    </div>


    <div class="form-group row">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nombre</label>
      <div class="col-sm-5">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Nombre" name="nombre_comp" value="{{$usuario->nombre_comp}}">
      </div>
    </div>


    <div class="form-group row">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Cedula</label>
      <div class="col-sm-5">
        <input type="number" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Cedula" name="cedula" value="{{$usuario->cedula}}">
      </div>
    </div>


    <div class="form-group row">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Fecha de Nacimiento</label>
      <div class="col-sm-5">
        <input type="date" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="F. Nac." name="fecha_nac" value="{{$usuario->fecha_nac}}">
      </div>
    </div>


    <div class="form-group row">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Fecha de Registro</label>
      <div class="col-sm-5">
        <input type="date" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="F. Reg." name="fecha_reg" value="{{$usuario->fecha_reg}}">
      </div>
    </div>


    <div class="form-group row">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Correo</label>
      <div class="col-sm-5">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Correo" name="correo" value="{{$usuario->correo}}">
      </div>
    </div>

    

            @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('adminlte::layouts.partials.controlsidebar')

    

</div><!-- ./wrapper -->
</div>
@section('scripts')
    @include('adminlte::layouts.partials.scripts')
@show

</body>
</html>