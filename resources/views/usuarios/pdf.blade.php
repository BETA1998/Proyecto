<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Listado de Personas</title>
  <link rel="stylesheet" type="text/css" href="css/app.css">
  
</head>

  

<body>
<div class="container">
<center><h1 class="mt-4">Listado de Personas</h1></center>
<table class="table table-inverse">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Cedula</th>
            <th>Fecha Nac.</th>
            <th>Fecha Reg.</th>
            <th>Correo</th>
          </tr>
        </thead>
        <tbody>
          @foreach($usuarios as $post)
          <tr>
        <td>{{$post->id}}</td>
        
        <td>{{$post->nombre_comp}}</td>
        <td>{{$post->cedula}}</td>
        <td>{{$post->fecha_nac}}</td>
        <td>{{$post->fecha_reg}}</td>
        <td>{{$post->correo}}</td>
            
          </tr>
        </tbody>
        @endforeach
      </table>
      </div>
</body>
</html>