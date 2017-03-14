@extends('layouts.master')
@section('content')

<div class="container-fluid">
  <div class="row">    

@include('includes.navbar')
@include('includes.sidebar')

  <div class="container-fluid employeecontent">
    <div class="container employeecontainer">
    <div class="panel panel-default">
    <div class="panel-heading"><a href="#" onclick = "addSupplier();"><span class="glyphicon glyphicon-plus-sign"></span> Add Supplier</a></div>
      <div class="panel-body">
        <table id="table1" class="table-hover">
        <thead>
          <tr>
            <th></th>          
            <th>Supplier ID</th>
            <th>Supplier Name</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><button type ="button" class="btn">View</button></td>
            <td>001</td>
            <td>CHINA WAX</td>
            <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td><button type ="button" class="btn">View</button></td>
            <td>002</td>
            <td>CHINA WAX</td>
            <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td><button type ="button" class="btn">View</button></td>
            <td>003</td>
            <td>CHINA WAX</td>
            <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td><button type ="button" class="btn">View</button></td>
            <td>004</td>
            <td>CHINA WAX</td>
            <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
           <tr>
            <td><button type ="button" class="btn">View</button></td>
            <td>005</td>
            <td>CHINA WAX</td>
            <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
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
<div id="addSupplierModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Supplier</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="sName">Supplier Name</label>
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

function addSupplier()
{
  $("#addSupplierModal").modal("show");
}

</script>

@endsection