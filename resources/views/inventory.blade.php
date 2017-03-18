@extends('layouts.master')

@section('content')

<div class="container-fluid">
  <div class="row">    

@include('includes.navbar')
@include('includes.sidebar')

  <div class="container-fluid jobordercontent">
    <br><br>
      <ul class="nav nav-pills">
        <li class="active"><a href="javascript:hideTable1();">Raw Materials</a></li>
        <li><a href="javascript:hideTable2();">Finished Product</a></li>
      </ul>
    </div>
  </div>

      <div id="rawmats" class="tab-pane fade in active">
            <!--<div class ='form-control'>-->
            <!--</div>-->
        <div class="container employeecontainer">
            
        <div class="panel panel-default">
            <div class="panel-body">
                <button type="button" data-toggle="modal" data-target="#rawMatsModal" class="btn btn-primary">+ Add Raw Material</button>
                <br><br>
          
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
              @foreach($rawMats as $rawMat)
              <tr>
                  <td>{{$rawMat->rawMaterialName}}</td>
                  <td>{{$rawMat->rawMaterialDescription}}</td>
                  <td>{{$rawMat->quantityAvailable}}</td>
                  <td>{{$rawMat->reOrderPoint}}</td>
                  <td><a href="{{ 'rawMats/'.$rawMat->rawMaterialsID.'/edit' }}"><span class ="glyphicon glyphicon-edit"</span></td>
                  <td><a href="{{ 'rawMats/'.$rawMat->rawMaterialsID.'/delete' }}"><span class ="glyphicon glyphicon-trash"</span></td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
          
        </div>
      </div>

      <div id="finishedprods" class="tab-pane fade hidden">
        <div class="container finishedproducttable">
        <div class="panel panel-default">
          <div class="panel-body">
              <button type="button" data-toggle="modal" data-target="#prodModal" class="btn btn-primary">+ Add Product</button>
              <br><br>
            <table id="tableFinishedProducts" class="table-hover">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Product Description</th>
                  <th>Inventory Count</th>
                  <th>Unit Price</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
            @foreach($products as $product)
              <tr>
                  <td>{{$product->productName}}</td>
                  <td>{{$product->productDescription}}</td>
                  <td>{{$product->quantityAvailable}}</td>
                  <td>{{$product->unitPrice}}</td>
                  <td><a href="{{ 'prod/'.$product->productID.'/edit' }}"><span class ="glyphicon glyphicon-edit"</span></td>
                  <td><a href="{{ 'prod/'.$product->productID.'/delete' }}"><span class ="glyphicon glyphicon-trash"</span></td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
          
        </div>
      </div>
                <div id="rawMatsModal" class="modal fade" role="dialog">                
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <form action="{{ url('/inventory/rawmats/create') }}" method="POST">
                         {{ csrf_field() }}
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add Raw Materials</h4>
                            </div>
                        <div class="modal-body">
                            <div class ="form-group">
                               Name of Material:<br>
                               <input type ="text" name ="mname" class ="form-control">
                               Description:<br>
                               <input type ="text" name ="description" class ="form-control">
                               Starting Inventory Count:<br>
                               <input type ="text" name ="count" class ="form-control">
                               Reorder Quantity:<br>
                               <input type ="text" name ="reorderpt" class ="form-control">
                               
                            </div>
                        </div>
                                 <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" id ="createbutton"> Add Raw Material</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                </div>
                         </form>
                    </div>
                  </div>
                </div>
    
                <div id="prodModal" class="modal fade" role="dialog">                
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <form action="{{ url('/inventory/prod/create') }}" method="POST">
                         {{ csrf_field() }}
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add a Product</h4>
                            </div>
                        <div class="modal-body">
                            <div class ="form-group">
                               Name of Product:<br>
                               <input type ="text" name ="pname" class ="form-control">
                               Description:<br>
                               <input type ="text" name ="description" class ="form-control">
                               Price:<br>
                               <input type ="text" name ="price" class ="form-control">
                            </div>
                        </div>
                                 <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" id ="createbutton"> Add Product</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                </div>
                         </form>
                    </div>
                  </div>                    
                </div>
    
                <div id="rawMatsModalEdit" class="modal fade" role="dialog">                
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <form action="{{ url('/inventory/rawmats/update') }}" method="POST">
                         {{ csrf_field() }}
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit Raw Material</h4>
                            </div>
                        <div class="modal-body">
                            <div class ="form-group">
                               Name of Material:<br>
                               <input type ="text" name ="mname" class ="form-control">
                               Description:<br>
                               <input type ="text" name ="description" class ="form-control">
                               Reorder Quantity:<br>
                               <input type ="text" name ="reorderpt" class ="form-control">
                               
                            </div>
                        </div>
                                 <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" id ="createbutton">Update Raw Material</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                </div>
                         </form>
                    </div>
                  </div>
                </div>
                
                <div id="prodModalEdit" class="modal fade" role="dialog">                
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <form action="{{ url('/inventory/prod/update') }}" method="POST">
                         {{ csrf_field() }}
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit Product</h4>
                            </div>
                        <div class="modal-body">
                            <div class ="form-group">
                               Name of Product:<br>
                               <input type ="text" name ="pname" class ="form-control">
                               Description:<br>
                               <input type ="text" name ="description" class ="form-control">
                               Price:<br>
                               <input type ="text" name ="price" class ="form-control">
                            </div>
                        </div>
                                 <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" id ="createbutton">Update Product</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                </div>
                         </form>
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

function hideTable1(){
        $('#finishedprods').addClass('hidden');
        $('#rawmats').removeClass('hidden');
        $('#finishedprods').removeClass('in active');
        $('#rawmats').addClass(' in active');
}

function hideTable2(){
        $('#finishedprods').removeClass('hidden');
        $('#rawmats').addClass('hidden');
        $('#rawmats').removeClass(' in active');
        $('#finishedprods').addClass('in active');
}

</script>
@endsection