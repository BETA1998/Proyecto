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
        <section class="content">
            <!-- Your Page Content Here -->

      <div class="container">

      @if(! $errors->isEmpty())
      <div class="alert alert-danger">
        <p><strong>ops</strong>error de registro</p>
        <ul>
          @foreach($errors->all() as $error)
              <li>{{$error}}</li>
          @endforeach
        </ul> 
        
      </div>

      @endif

      
     <form method="post" action="{{url('usuarios')}}" enctype="Multipart/form-data">

     <div class="form-group row">
      {{csrf_field()}}
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nombre</label>
      <div class="col-sm-5">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Nombre" name="nombre_comp">
      </div>
     </div>
    

     <div class="form-group row">
      {{csrf_field()}}
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Cedula</label>
      <div class="col-sm-5">
        <input type="number" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Cedula" name="cedula">
      </div>
    </div>


    <div class="form-group row">
      {{csrf_field()}}
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Fecha de Nacimiento</label>
      <div class="col-sm-5">
        <input type="date" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="F. Nac." name="fecha_nac">
      </div>
    </div>


    <div class="form-group row">
      {{csrf_field()}}
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Fecha de Registro</label>
      <div class="col-sm-5">
        <input type="date" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="F. Reg." name="fecha_reg">
      </div>
    </div>


    <div class="form-group row">
      {{csrf_field()}}
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Correo</label>
      <div class="col-sm-5">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Correo" name="correo">
      </div>
    </div>


    <div class="form-group row">
      {{csrf_field()}}
      
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Imagen</label>
      <div class="col-sm-5">
        <input type="file" class="form-control form-control-lg" id="lgFormGroupInput" name="avatar">
      </div>
    </div>
    

    <div class="form-group row">
      <div class="col-md-0.5"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
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