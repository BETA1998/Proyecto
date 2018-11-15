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
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Cedula</th>
        <th>Fecha Nac.</th>
        <th>Fecha Reg.</th>
        <th>Correo</th>
        <th colspan="1">Operación</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['nombre_comp']}}</td>
        <td>{{$post['cedula']}}</td>
        <td>{{$post['fecha_nac']}}</td>
        <td>{{$post['fecha_reg']}}</td>
        <td>{{$post['correo']}}</td>
        
        <td><a href="{{action('UsuariosController@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>

          <!--<form action="{{action('UsuariosController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Eliminar</button>
          </form>-->

          <a href="" data-target="#modal-delete-{{$post['id']}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>

          <div class="modal fade modal-slide-in-right" aria-hidden="true"
          role="dialog" tabindex="-1" id="modal-delete-{{$post['id']}}">

          
        <form action="{{action('UsuariosController@destroy', $post['id'])}}" method="post">
            

         <div class="modal-dialog">
         <div class="modal-content">
         <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" 
         aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Eliminar Usuario</h4>
         </div>
         <div class="modal-body">
         <p>¿Estas seguro que desea Eliminar el Usuario?</p>
         </div>
         <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              {{csrf_field()}}
             <input name="_method" type="hidden" value="DELETE">
             <button class="btn btn-danger" type="submit">Eliminar</buton>
      </div>
    </div>
   </div>
  </form>

   </div>

         
          
        </td>
      </tr>
      
      @endforeach

    </tbody>
  </table>
  
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



