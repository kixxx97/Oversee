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
            <th>Supplier ID</th>
            <th>Supplier Name</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
            <tbody>
            @foreach ($suppliers as $supplier)
              <tr>
                <td>{{ $supplier->id }}</td>
                <td>{{ $supplier->name }}</td>
                <td><button type="button" class="edit" value="{{'supplier/'.$supplier->id.'/updateSupplier'}}">Edit</button></td>
                <td><button type="button" class="delete" value="{{'supplier/'.$supplier->id.'/deleteSupplier'}}">Delete</button></td>
              </tr>   
            @endforeach
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
    
    $("#table1").on("click", ".delete" , function()
    {
       var id  = $(this).closest('.delete').val();
       
       if (confirm('Do you want to delete this supplier?'))
       {
           window.location = id;
       }
    });
    
    $("#table1").on("click", ".edit" ,function()
    {
       var id = $(this).closest('.edit').val();
       window.location = id;
    });
});

function addSupplier()
{
  $("#addSupplierModal").modal("show");
  
}

</script>

@endsection