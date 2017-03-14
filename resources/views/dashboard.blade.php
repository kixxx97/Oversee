@extends('layouts.master')

@section('content')

<!DOCTYPE html>
<html>
<head>
  <title>Oversee</title>

</head>
<body>

<div class="container-fluid">
  <div class="row">    

@include('includes.navbar')

@include('includes.sidebar')

  <div class="content">
    <div class="col-md-12">
      <!-- DISPLAY HERE -->
      <center>
        <br><br>
        <h3>DASHBOARD</h3>
        <br><br>
        <img class="dashImg" src="assets/img/dashboardgraph.jpg">
      </center>
    </div>
  </div>

  </div>
</div>

</body>
</html>

@endsection