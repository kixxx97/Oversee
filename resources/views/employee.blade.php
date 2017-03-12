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
            <a class="activeLink" href="employee.html">Employee</a>
        </li>
        <li>
            <a href="inventory.html">Inventory</a>
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

  <div class="container-fluid employeecontent">
    <div class="container employeecontainer">
    <div class="panel panel-default">
    <div class="panel-heading"><a href="#" data-toggle="modal" data-target="#newEmpModal"><span class="glyphicon glyphicon-plus-sign"></span> New Employee</a></div>
      <div class="panel-body">
        <table id="table1" class="table-hover">
        <thead>
          <tr>
            <th>Employee ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th>Assigned Work</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
            <td><a href="#">><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#"><span class="glyphicon glyphicon-edit"></span></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#"><span class="glyphicon glyphicon-edit"></span></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
      
    </div>
  </div>

  </div>

   <!-- Modal -->
  <div class="modal fade" id="newEmpModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create New Employee</h4>
        </div>
        <div class="modal-body">
          <div class="wrapper newEmployeeModal">
            <label for="employeeID">Employee ID</label>
            <input id="employeeID" type="text" class="form-control">
            
            <label for="fname">First Name</label>
            <input id="fname" type="text" class="form-control">
            
            <label for="lname">Last Name</label>
            <input id="lname" type="text" class="form-control">
            
            <label for="cntactNum">Contact Number</label>
            <input id="cntactNum" type="text" class="form-control">
            
            <label for="email">Email Address</label>
            <input id="email" type="text" class="form-control">
            
            <label for="assignWork">Assigned Work</label>
            <input id="assignWork" type="text" class="form-control">
            <br>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btnclose" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btnsubmit">Submit</button>
        </div>
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

</script>

@endsection