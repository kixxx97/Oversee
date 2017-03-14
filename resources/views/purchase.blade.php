@extends('layouts.master')
@section('content')
<div class="container-fluid">
  <div class="row">    

 @include('includes.navbar')
@include('includes.sidebar')

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
            <th>Requested By</th>
            <th>Received By</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($purchases as $purchase)
          <tr>
            <td><button type ="button" class="btn view" val="{{ 'purchase/'.$purchase->id.'/viewPurchase' }}">View</button></td>
            <td>$purchase->id</td>
            <td>$purchase->reqBy</td>
            <td>$purchase->recBy</td>
            <td>$purchase->status</td>
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
    
    $("#table1").on("click" , ".view" , function()
    {
        var id = $(this).closest('.view').val();
        
        window.location = id;
    });
});
function addPurchase()
{
  $("#addPurchaseModal").modal("show");
}

</script>

@endsection