@extends('layouts.master')

@section('content')

<div class="container-fluid">
  <div class="row">    

    <nav class="navbar navbar-inverse navContainer">
    <div class="container-fluid navbackgroundwhite">
      <div class="navbar-header">
        <a class="navbar-brand brandWidth" href="#"><span class="oversee">Oversee</span></a>
      </div>
      <ul class="nav navbar-nav">
        <li><span onClick="location.href='dashboard.html'"><span class="fa fa-navicon icon"><span class="brandheader"> Dashboard</span></span></span></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <div class="dropdown">
          <button class="btn dropdown-toggle buttondropdown" type="button" data-toggle="dropdown"><span class="user">Administrator</span><img class="overseelogo" src="assets/img/oversee.png" draggable="false">
          <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">View Profile</a></li>
            <li><a href="checkprod.html">Check Productivity</a></li>
            <li><a href="#">Account Settings</a></li>
            <li class="divider"></li>
            <li><a href="#">Sign Out</a></li>
          </ul>
        </div>
      </ul>
    </div>
    </nav>
  </div>
 </div>

<div id="sidebar-wrapper" class="sidebar-toggle">
    <ul class="sidebar-nav">
        <center>
          <li>
            <span class="welcome" style="text-decoration: underline;">JOB ORDERS</span>
          </li>
          <br><br><br>
          <li>
              <a href="checkprod.html">ALL JOB ORDERS</a>
          </li>

          <li>
              <a class="activeLink" href="customerJobOrder.html">CUSTOMER JOB ORDERS</a>
          </li>

          <li>
              <a href="stockJobOrder.html">STOCK JOB ORDERS</a>
          </li>
    </center>
    </ul>
</div>

  <div class="container-fluid employeecontent">
    <div class="container employeecontainer">
    <div class="panel panel-default">
      <div class="panel-body">
        <table id="table1" class="table-hover">
        <thead>
          <tr>
            <th></th>          
            <th>Job Order ID</th>
            <th>Type</th>
            <th>Percentage</th>
            <th>Last Updated</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><button type ="button" class="btn" onclick="viewJobOrder();">View</button></td>
            <td>200</td>
            <td>Customer</td>
            <td>50%</td>
            <td>January 17, 2017</td>
          </tr>
          <tr>
            <td><button type ="button" class="btn" onclick="viewJobOrder();">View</button></td>
            <td>200</td>
            <td>Customer</td>
            <td>50%</td>
            <td>January 17, 2017</td>
          </tr> 
        </tbody>
      </table>
      </div>
    </div>
    </div>
  </div>

<script>
$(document).ready(function(){
    $('#table1').dataTable( {
        "pageLength": 10,
        "oLanguage": {
                 "oPaginate": {
                    "sNext": "<i style='position: relative; top:2px;' class='fa fa-angle-right'></i>",
                "sPrevious": "<i style='position: relative; top:2px;' class='fa fa-angle-left'></i>"
                  }
              }
    });
});
function viewJobOrder()
{
  window.location.href = "viewjoborder.html";
}
</script>
@endsection