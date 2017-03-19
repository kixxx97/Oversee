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
                        <tr>
                          <td>001</td>
                          <td>WAX</td>
                          <td>N/A</td>
                          <td>10 SACKS</td>
                          <td>8 SACKS</td>
                          <td>15 SACKS</td>
                        </tr>
                        <tr>
                          <td>002</td>
                          <td>WIX</td>
                          <td>N/A</td>
                          <td>20 METERS</td>
                          <td>10 METERS</td>
                          <td>30 METERS</td>
                        </tr>
                        <tr>
                          <td>003</td>
                          <td>BOTTLE</td>
                          <td>N/A</td>
                          <td>50 PCS</td>
                          <td>30 PCS</td>
                          <td>80 SACKS</td>
                        </tr>                        
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
                    <tr>
                      <td>001</td>
                      <td>Small Candle</td>
                      <td>25</td>
                      <td>10</td>
                      <td>250</td>
                      <td>October 16 2016</td>
                      <td>20 packs</td>
                    </tr>
                    <tr>
                      <td>002</td>
                      <td>Medium Candle</td>
                      <td>20</td>
                      <td>8</td>
                      <td>160</td>
                      <td>October 16 2016</td>
                      <td>30 packs</td>
                    </tr>
                    <tr>
                      <td>003</td>
                      <td>King Candle</td>
                      <td>25</td>
                      <td>10</td>
                      <td>250</td>
                      <td>October 16 2016</td>
                      <td>20 packs</td>
                    </tr>
                     <tr>
                      <td>004</td>
                      <td>Dwarf Candle</td>
                      <td>25</td>
                      <td>10</td>
                      <td>250</td>
                      <td>October 16 2016</td>
                      <td>20 packs</td>
                    </tr>
                    <tr>
                      <td>005</td>
                      <td>Glass Candle</td>
                      <td>25</td>
                      <td>10</td>
                      <td>250</td>
                      <td>October 16 2016</td>
                      <td>20 packs</td>
                    </tr>                                       
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
                    <tr>
                      <td>001</td>
                      <td>Cherry Retuya</td>
                      <td>550</td>
                      <td>517</td>
                      <td>200 mins</td>
                      <td>99</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>001</td>
                      <td>Gil Canedo</td>
                      <td>550</td>
                      <td>517</td>
                      <td>200 mins</td>
                      <td>99</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>001</td>
                      <td>Kirster Quinio</td>
                      <td>550</td>
                      <td>517</td>
                      <td>200 mins</td>
                      <td>99</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>001</td>
                      <td>Franz Parans</td>
                      <td>550</td>
                      <td>517</td>
                      <td>200 mins</td>
                      <td>99</td>
                      <td>A</td>
                    </tr>                                      
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
                    <tr>
                      <td>001</td>
                      <td>Cherry Retuya</td>
                      <td>9</td>
                      <td>517</td>
                      <td>4653</td>
                      <td></td>
                      <td>4653</td>
                    </tr>
                    <tr>
                      <td>001</td>
                      <td>Gil Canedo</td>
                      <td>8</td>
                      <td>517</td>
                      <td>4064</td>
                      <td></td>
                      <td>4064</td>
                    </tr>
                    <tr>
                      <td>001</td>
                      <td>Kirster Quinio</td>
                      <td>10</td>
                      <td>517</td>
                      <td>4990</td>
                      <td></td>
                      <td>4990</td>
                    </tr>
                    <tr>
                      <td>001</td>
                      <td>Franz Parans</td>
                      <td>9</td>
                      <td>517</td>
                      <td>4248</td>
                      <td></td>
                      <td>4248</td>
                    </tr>                                      
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
