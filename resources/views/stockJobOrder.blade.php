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
            @foreach ($stockorders as $stockorder)
          <tr>
            <td><button type ="button" class="btn view" value="{{ 'checkprod/'.$stockorder->id.'/viewjoborder'}}">View</button></td>
            <td>{{$stockorder->id}}</td>
            <td>{{$stockorder->type}}</td>
            <td>{{$stockorder->percentage}}</td>
            <td>{{$stockorder->updateDate}}</td>
          </tr>
          @endforeach
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