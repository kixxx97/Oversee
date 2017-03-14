@extends('layouts.master')

@section('content')

<div class="container-fluid">
  <div class="row">    

@include('includes.navbar')
@include('includes.sidebar')

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