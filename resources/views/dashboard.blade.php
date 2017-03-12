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

  <nav class="navbar navbar-inverse navContainer">
  <div class="container-fluid navbackgroundwhite">
    <div class="navbar-header">
      <a class="navbar-brand brandWidth" href="#"><span class="oversee">Oversee</span></a>
    </div>
    <ul class="nav navbar-nav">
      <li><span class="fa fa-navicon icon"><span class="brandheader"> Dashboard</span></span></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <div class="dropdown">
        <button class="btn dropdown-toggle buttondropdown" type="button" data-toggle="dropdown"><span class="user">Administrator</span><img class="overseelogo" src="assets/img/oversee.png" draggable="false">
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">View Profile</a></li>
          <li><a href="#">Account Settings</a></li>
          <li class="divider"></li>
          <li><a href="#">Sign Out</a></li>
        </ul>
      </div>
    </ul>
  </div>
</nav>

  <div id="sidebar-wrapper" class="sidebar-toggle">
    <ul class="sidebar-nav">
        <center><li>
          <span class="welcome">Welcome, Administrator!</span>
        </li>
        <li>
            <a href="joborder.php">Job Order</a>
        </li>
        <li>
            <a href="employee.php">Employee</a>
        </li>
        <li>
            <a href="inventory.php">Inventory</a>
        </li>
        <li>
            <a href="reports.php">Reports</a>
        </li>
        <li>
            <a href="purchase.php">Purchase</a>
        </li>
        <li>
            <a href="supplier.php">Supplier</a>
        </li></center>
    </ul>
    </div>

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