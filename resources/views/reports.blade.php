@extends('layouts.master')
@section('content')
<div class="container-fluid">
  <div class="row">    

@include('includes.navbar')
@include('includes.sidebar')

    <div class="container-fluid jobordercontent">
      <br><br>
        <ul class="nav nav-pills">
          <li class="active"><a data-toggle="pill" href="#rawmatsreport">Raw Materials Report</a></li>
          <li><a data-toggle="pill" href="#finalreport">Final Product Report</a></li>
          <li><a data-toggle="pill" href="#prodreport">Productivity Report</a></li>
          <li><a data-toggle="pill" href="#payreport">Payroll Report</a></li>
        </ul>
    </div>

       <div id="rawmatsreport" class="tab-pane fade in active">
          <div class="container finishedproducttable">
              <div class="panel panel-default">
                <div class="panel-body">

                  <table id="tableRawMatsReport" class="table-hover">
                    <thead>
                      <tr>
                        <th>Raw Material ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Reorder Point</th>
                        <th>Used</th>
                        <th>Available</th>
                      </tr>
                    </thead>
                       <tbody>
                        @foreach ($rawmaterials as $rawmaterial)
                            <tr>
                              <td>{{$rawmaterial->id}}</td>
                              <td>{{$rawmaterial->name}}</td>
                              <td>{{$rawmaterial->description}}</td>
                              <td>{{$rawmaterial->reorder}}</td>
                              <td>{{$rawmaterial->used}}</td>
                              <td>{{$rawmaterial->available}}</td>
                            </tr> 
                        @endforeach
                      </tbody>
                  </table>
                  <button type = "button" id ="rawmatsbutton" class = "btn btn-default">Print Report</button>
                </div>
              </div>
           </div>
      </div>
        <div id="finalreport" class="tab-pane fade">
          <div class="container finishedproducttable">
            <div class="panel panel-default">
              <div class="panel-body">
                <table id="tableFinalReport" class="table-hover">
                  <thead>
                    <tr>
                      <th>Product ID</th>
                      <th>Product Name</th>
                      <th>Price/Unit</th>
                      <th>Pcs Sold</th>
                      <th>Amount</th>
                      <th>Last Ordered</th>
                      <th>Available</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach( $finalreports as $finalreport)
                        <tr>
                          <td>{{$finalreport->id}}</td>
                          <td>{{$finalreport->name}}</td>
                          <td>{{$finalreport->price}}</td>
                          <td>{{$finalreport->pcsSold}}</td>
                          <td>{{$finalreport->amount}}</td>
                          <td>{{$finalreport->lastOrdered}}</td>
                          <td>{{$finalreport->available}}</td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
                <button type = "button" id ="finalreportbutton" class = "btn btn-default">Print Report</button>
              </div>
            </div>
          </div>
       </div>
       <div id="prodreport" class="tab-pane fade">
          <div class="container finishedproducttable">
            <div class="panel panel-default">
              <div class="panel-body">
                <table id="tableProdReport" class="table-hover">
                  <thead>
                    <tr>
                      <th>Employee ID</th>
                      <th>Employee Name</th>
                      <th>Total Assigned</th>
                      <th>Total Finished</th>
                      <th>Average Time</th>
                      <th>Average Item Completed</th>
                      <th>Level</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($productreports as $productreport)
                        <tr>
                          <td>{{$productreport->id}}</td>
                          <td>{{$productreport->name}}</td>
                          <td>{{$productreport->totalAssigned}}</td>
                          <td>{{$productreport->totalFinished}}</td>
                          <td>{{$productreport->aveTimeCompleted}}</td>
                          <td>{{$productreport->level}}</td>
                        </tr>   
                    @endforeach
                  </tbody>
                </table>
                <button type = "button" id ="prodreportbutton" class = "btn btn-default">Print Report</button>
              </div>
            </div>
          </div>
       </div>
        <div id="payreport" class="tab-pane fade">
          <div class="container finishedproducttable">
            <div class="panel panel-default">
              <div class="panel-body">
                <table id="tablePayReport" class="table-hover">
                  <thead>
                    <tr>
                      <th>Employee ID</th>
                      <th>Employee Name</th>
                      <th>Rate Product</th>
                      <th>Products Made</th>
                      <th>Gross Amount</th>
                      <th>Tax</th>
                      <th>Net Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($payreports as $payreport)
                        <tr>
                          <td>{{$payreport->id}}</td>
                          <td>{{$payreport->name}}</td>
                          <td>{{$payreport->rateProdcuts}}</td>
                          <td>{{$payreport->productsMade}}</td>
                          <td>{{$payreport->grossAmount}}</td>
                          <td>{{$payreport->tax}}</td>
                          <td>{{$payreport->netAmount}}</td>
                        </tr> 
                    @endforeach
                  </tbody>
                </table>
                <button type = "button" id ="payreportbutton" class = "btn btn-default">Print Report</button>
              </div>
            </div>
          </div>
       </div>
  </div>
</div>

<script>
$(document).ready(function(){
    $('#tableRawMatsReport').dataTable( {
      "lengthChange" : false,
        "pageLength": 10,
        "oLanguage": {
                 "oPaginate": {
                    "sNext": "<i style='position: relative; top:2px;' class='fa fa-angle-right'></i>",
                "sPrevious": "<i style='position: relative; top:2px;' class='fa fa-angle-left'></i>"
                  }
              }
    });
    $('#tableFinalReport').dataTable( {
      "lengthChange" : false,
        "pageLength": 10,
        "oLanguage": {
                 "oPaginate": {
                    "sNext": "<i style='position: relative; top:2px;' class='fa fa-angle-right'></i>",
                "sPrevious": "<i style='position: relative; top:2px;' class='fa fa-angle-left'></i>"
                  }
              }
    });
    $('#tableProdReport').dataTable( {
      "lengthChange" : false,
        "pageLength": 10,
        "oLanguage": {
                 "oPaginate": {
                    "sNext": "<i style='position: relative; top:2px;' class='fa fa-angle-right'></i>",
                "sPrevious": "<i style='position: relative; top:2px;' class='fa fa-angle-left'></i>"
                  }
              }
    });
    $('#tablePayReport').dataTable( {
      "lengthChange" : false,
        "pageLength": 10,
        "oLanguage": {
                 "oPaginate": {
                    "sNext": "<i style='position: relative; top:2px;' class='fa fa-angle-right'></i>",
                "sPrevious": "<i style='position: relative; top:2px;' class='fa fa-angle-left'></i>"
                  }
              }
    });
    
});
$(function()
{
    $("#rawmatsdatepicker").datepicker();
});

</script>
@endsection
