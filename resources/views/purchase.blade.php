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
            <a href="inventory.html">Inventory</a>
        </li>
        <li>
            <a href="reports.html">Reports</a>
        </li>
        <li>
            <a class="activeLink" href="purchase.html">Purchase</a>
        </li>
        <li>
            <a href="supplier.html">Supplier</a>
        </li></center>
    </ul>
    </div>

  <div class="container-fluid purchasecontent">
    <div class="container purchasecontainer">
    <div class="panel panel-default">
    <div class="panel-heading"><a href="#" onclick="addPurchase();"><span class="glyphicon glyphicon-plus-sign"></span> Add Purchase Order</a></div>
      <div class="panel-body">
        <table id="table1" class="table-hover">
        <thead>
          <tr>          
            <th>View</th>
            <th>Purchase ID</th>
            <th>Purchase Order Name</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <td><a href="#"><button type ="button" class="btn">View</button></a></td>
            <td>001</td>
            <td>BOTTLE</td>
            <td>OK</td>
          </tr>
           <tr>
           <td><a href="#"><button type ="button" class="btn">View</button></a></td>
            <td>002</td>
            <td>BOTTLE</td>
            <td>OK</td>
          </tr>
           <tr>
           <td><a href="#"><button type ="button" class="btn">View</button></a></td>
            <td>003</td>
            <td>BOTTLE</td>
            <td>OK</td>
          </tr>
            <tr>
            <td><a href="#"><button type ="button" class="btn">View</button></a></td>
            <td>004</td>
            <td>BOTTLE</td>
            <td>OK</td>
          </tr>          
        </tbody>
      </table>
      </div>
    </div>
    </div>
  </div>

  </div>
</div>

<!-- Modal -->
<div id="addPurchaseModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Supplier</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="sName">Purchase Order Name</label>
          <input type="text" class="form-control" id="sName">
        </div>
        <div class="form-group">
          <label for="qSupp">Quantity of Supply</label>
          <input type="text" class="form-control" id="qSupp">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default">Add Supplier</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End of Modal -->

</body>

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
function addPurchase()
{
  $("#addPurchaseModal").modal("show");
}

</script>

@endsection