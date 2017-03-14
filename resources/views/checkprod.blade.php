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
            @foreach ($checkprods as $checkprod)
                <tr>
                  <td><button type ="button" class="btn view" value="{{ 'checkprod/'.$checkprod->id.'/viewjoborder'}}">View</button></td>
                  <td>{{$checkprod->id}}</td>
                  <td>{{$checkprod->type}}</td>
                  <td>{{$checkprod->percentage}}</td>
                  <td>{{$checkprod->updateDate}}</td>
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
    $("#table1").on("click" , ".view", function()
    {
       var id = $(this).closest('.view').val(); 
       
       window.location = id;
    });
});

</script>
@endsection