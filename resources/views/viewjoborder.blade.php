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
      <div class="panel-heading">
      	<p style="text-decoration: underline;">DETAILS</p>
      	Job Order ID : 200 <br>
      	Type : Customer (Name) / Stock <br>
      	Products to be Made : 1000 <br>
      	Deadline : <br>
      </div>
      <div class="panel-body">
        <table id="table1" class="table-hover">
        <thead>
          <tr>
            <th></th>          
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Quantity Produced</th>
            <th>Last Updated</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
            <button type ="button" class="btn" onclick="viewProductivity();"><span class="glyphicon glyphicon-eye-open"></button>
            <button type ="button" class="btn" onclick="checkEmployee();"><span class="glyphicon glyphicon-check"></button>
            </td>
            <td>001</td>
            <td>Cherry Anne Retuya</td>
            <td>400</td>
            <td>January 17, 2017</td>
          </tr>
          <tr>
            <td>
            <button type ="button" class="btn" onclick="viewProductivity();"><span class="glyphicon glyphicon-eye-open"></button>
            <button type ="button" class="btn" onclick="checkEmployee();"><span class="glyphicon glyphicon-check"></button>
            </td>
            <td>002</td>
            <td>Kirster Kyle Quinio</td>
            <td>300</td>
            <td>January 17, 2017</td>
          </tr> 
          <tr>
            <td>
            <button type ="button" class="btn" onclick="viewProductivity();"><span class="glyphicon glyphicon-eye-open"></button>
            <button type ="button" class="btn" onclick="checkEmployee();"><span class="glyphicon glyphicon-check"></button>
            </td>
            <td>003</td>
            <td>Franz Paran</td>
            <td>100</td>
            <td>January 17, 2017</td>
          </tr> 
          <tr>
            <td>
            <button type ="button" class="btn" onclick="viewProductivity();"><span class="glyphicon glyphicon-eye-open"></button>
            <button type ="button" class="btn" onclick="checkEmployee();"><span class="glyphicon glyphicon-check"></button>
            </td>
            <td>004</td>
            <td>Gil Canedo</td>
            <td>100</td>
            <td>January 17, 2017</td>
          </tr>                      
        </tbody>
      </table>
      </div>
    </div>
    </div>
  </div>

  <div class="modal fade" id="checkProd" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Check Productivity</h4>
        </div>
        <div class="modal-body">
          <div class="wrapper newEmployeeModal">
            <label for="numProds">Quantity:</label>
            <input id="numProds" type="text" class="form-control">
            
            <label for="confQuan">Confirm Quantity:</label>
            <input id="confQuan" type="text" class="form-control">
            <br>
          </div>
        </div>
        <div class="modal-footer">     
          <button type="submit" class="btn btn-primary btn submit">Submit</button>
          <button type="button" class="btn btn-danger btnclose" data-dismiss="modal">Cancel</button>
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
    $('#table2').dataTable( {
        "pageLength": 10,
        "oLanguage": {
                 "oPaginate": {
                    "sNext": "<i style='position: relative; top:2px;' class='fa fa-angle-right'></i>",
                "sPrevious": "<i style='position: relative; top:2px;' class='fa fa-angle-left'></i>"
                  }
              }
    });
});
function viewProductivity()
{
	$("#viewEmployeeProductivity").show();
}
function closeDetails()
{
	$("#viewEmployeeProductivity").hide();
}
function checkEmployee()
{
	$("#checkProd").modal("show");
}
</script>

@endsection