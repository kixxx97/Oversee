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
            <a href="joborder.html">Job Order</a>
        </li>
        <li>
            <a href="employee.html">Employee</a>
        </li>
        <li>
            <a class="activeLink" href="inventory.html">Inventory</a>
        </li>
        <li>
            <a href="reports.html">Reports</a>
        </li>
        <li>
            <a href="purchase.html">Purchase</a>
        </li>
        <li>
            <a href="supplier.html">Supplier</a>
        </li></center>
    </ul>
    </div>

  <div class="container-fluid jobordercontent">
    <br><br>
      <ul class="nav nav-pills">
        <li class="active"><a data-toggle="pill" href="#rawmats">Raw Materials</a></li>
        <li><a data-toggle="pill" href="#finishedprods">Finished Product</a></li>
      </ul>
    </div>
  </div>

      <div id="rawmats" class="tab-pane fade in active">
        <div class="container employeecontainer">
        <div class="panel panel-default">
          <div class="panel-body">
            <table id="tableRawMats" class="table-hover">
              <thead>
                <tr>
                  <th>Material ID</th>
                  <th>Material Name</th>
                  <th>Inventory Count</th>
                  <th>Reorder Point</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>200</td>
                  <td>Bottle</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>200</td>
                  <td>Bottle</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>200</td>
                  <td>Bottle</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>200</td>
                  <td>Bottle</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>200</td>
                  <td>Bottle</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>200</td>
                  <td>Bottle</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>200</td>
                  <td>Bottle</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>200</td>
                  <td>Bottle</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>200</td>
                  <td>Bottle</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>200</td>
                  <td>Bottle</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>200</td>
                  <td>Bottle</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>200</td>
                  <td>Bottle</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>200</td>
                  <td>Bottle</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>200</td>
                  <td>Bottle</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>200</td>
                  <td>Bottle</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
          
        </div>
      </div>

      <div id="finishedprods" class="tab-pane fade">
        <div class="container finishedproducttable">
        <div class="panel panel-default">
          <div class="panel-body">
            <table id="tableFinishedProducts" class="table-hover">
              <thead>
                <tr>
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Inventory Count</th>
                  <th>Reorder Point</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>300</td>
                  <td>Coke 8 oz</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>300</td>
                  <td>Coke 8 oz</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>300</td>
                  <td>Coke 8 oz</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>300</td>
                  <td>Coke 8 oz</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>300</td>
                  <td>Coke 8 oz</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>300</td>
                  <td>Coke 8 oz</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>300</td>
                  <td>Coke 8 oz</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>300</td>
                  <td>Coke 8 oz</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>300</td>
                  <td>Coke 8 oz</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>300</td>
                  <td>Coke 8 oz</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>300</td>
                  <td>Coke 8 oz</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>300</td>
                  <td>Coke 8 oz</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>300</td>
                  <td>Coke 8 oz</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>300</td>
                  <td>Coke 8 oz</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <tr>
                  <td>300</td>
                  <td>Coke 8 oz</td>
                  <td>200pcs</td>
                  <td>150</td>
                  <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
          
        </div>
      </div>

<script>
$(document).ready(function(){
    $('#tableRawMats').dataTable( {
        "pageLength": 10,
        "oLanguage": {
                 "oPaginate": {
                    "sNext": "<i style='position: relative; top:2px;' class='fa fa-angle-right'></i>",
                "sPrevious": "<i style='position: relative; top:2px;' class='fa fa-angle-left'></i>"
                  }
              }
    });
    $('#tableFinishedProducts').dataTable( {
        "pageLength": 10,
        "oLanguage": {
                 "oPaginate": {
                    "sNext": "<i style='position: relative; top:2px;' class='fa fa-angle-right'></i>",
                "sPrevious": "<i style='position: relative; top:2px;' class='fa fa-angle-left'></i>"
                  }
              }
    });
});

</script>
@endsection