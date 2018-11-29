<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
    @include('adminlte::layouts.partials.htmlheader')
@show


<body class="skin-blue sidebar-mini">
<div id="app" v-cloak>
    <div class="wrapper">

    @include('adminlte::layouts.partials.mainheader')

    @include('adminlte::layouts.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('adminlte::layouts.partials.contentheader')

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            <head>
  <title>Make Google Pie Chart in Laravel</title>
  <script src="/js/jquery.min.js"></script>
  <script type="text/javascript" src="/js/loader.js"></script>
  <link rel="stylesheet" href="/css/bootstrap.min.css" />
  <style type="text/css">
   .box{
    width:800px;
    margin:0 auto;
   }
  </style>
  <script type="text/javascript">
   var analytics = <?php echo $fecha_reg; ?>

   google.charts.load('current', {'packages':['corechart']});

   google.charts.setOnLoadCallback(drawChart);

   function drawChart()
   {
    var data = google.visualization.arrayToDataTable(analytics);
    var options = {
     title : 'Porcentaje de fechas de personas registradas'
    };
    var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
    chart.draw(data, options);
   }
  </script>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">Graficas por fechas de registros</h3><br />
   
   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">Porcentaje de fechas de personas registradas</h3>
    </div>
    <div class="panel-body" align="center">
     <div id="pie_chart" style="width:750px; height:450px;">
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
