@extends('layouts.master')

@section('content')

<div class="container-fluid">
  <div class="row">    

@include('includes.navbar')
  </div>
 </div>

@include('includes.sidebarCheckProd')

  <div class="container-fluid employeecontent">
    <div class="container employeecontainer">
    <div class="panel panel-default">
      <div class="panel-body">
        <table id="table1" class="table-hover">
        <thead>
          <tr>
            <th></th>          
            <th>Job Order ID</th>
            <th>Type</th>
            <th>Percentage</th>
            <th>Last Updated</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><button type ="button" class="btn" onclick="viewJobOrder();">View</button></td>
            <td>200</td>
            <td>Stock</td>
            <td>50%</td>
            <td>January 17, 2017</td>
          </tr>
          <tr>
            <td><button type ="button" class="btn" onclick="viewJobOrder();">View</button></td>
            <td>200</td>
            <td>Stock</td>
            <td>50%</td>
            <td>January 17, 2017</td>
          </tr>   
        </tbody>
      </table>
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
function viewJobOrder()
{
	window.location.href = "{{url('/viewjoborder')}}";
}
</script>
@endsection