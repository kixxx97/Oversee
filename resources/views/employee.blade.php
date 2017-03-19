@extends('layouts.master')

@section('content')

<div class="container-fluid">
  <div class="row">    

@include('includes.navbar')
@include('includes.sidebar')

  <div class="container-fluid employeecontent">
    <div class="container employeecontainer">
    <div class="panel panel-default">
    <div class="panel-heading"><a href="#" data-toggle="modal" data-target="#newEmpModal"><span class="glyphicon glyphicon-plus-sign"></span> New Employee</a></div>
      <div class="panel-body">
        <table id="table1" class="table-hover">
        <thead>
          <tr>
            <th>Employee ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th>Assigned Work</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#" data-toggle="modal" data-target="#editEmpModal"><span class="glyphicon glyphicon-edit editBtnEmployee"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#" data-toggle="modal" data-target="#editEmpModal"><span class="glyphicon glyphicon-edit editBtnEmployee"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#" data-toggle="modal" data-target="#editEmpModal"><span class="glyphicon glyphicon-edit editBtnEmployee"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#" data-toggle="modal" data-target="#editEmpModal"><span class="glyphicon glyphicon-edit editBtnEmployee"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#" data-toggle="modal" data-target="#editEmpModal"><span class="glyphicon glyphicon-edit editBtnEmployee"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#" data-toggle="modal" data-target="#editEmpModal"><span class="glyphicon glyphicon-edit editBtnEmployee"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#" data-toggle="modal" data-target="#editEmpModal"><span class="glyphicon glyphicon-edit editBtnEmployee"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#" data-toggle="modal" data-target="#editEmpModal"><span class="glyphicon glyphicon-edit editBtnEmployee"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#" data-toggle="modal" data-target="#editEmpModal"><span class="glyphicon glyphicon-edit editBtnEmployee"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#" data-toggle="modal" data-target="#editEmpModal"><span class="glyphicon glyphicon-edit editBtnEmployee"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#" data-toggle="modal" data-target="#editEmpModal"><span class="glyphicon glyphicon-edit editBtnEmployee"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#" data-toggle="modal" data-target="#editEmpModal"><span class="glyphicon glyphicon-edit editBtnEmployee"></span></a></td>
            <td><a href="#">><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#" data-toggle="modal" data-target="#editEmpModal"><span class="glyphicon glyphicon-edit editBtnEmployee"></span></a></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#" data-toggle="modal" data-target="#editEmpModal"><span class="glyphicon glyphicon-edit editBtnEmployee"></span></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></td>
          </tr>
          <tr>
            <td>100</td>
            <td>Canedo</td>
            <td>Gil Ralph</td>
            <td>09336310984</td>
            <td>john@example.com</td>
            <td>Limpyo Balay</td>
            <td><a href="#" data-toggle="modal" data-target="#editEmpModal"><span class="glyphicon glyphicon-edit editBtnEmployee"></span></td>
            <td><a href="#"><span class="glyphicon glyphicon-trash"></span></td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
      
    </div>
  </div>

  </div>

   <!-- Add Employee Modal -->
  <div class="modal fade" id="newEmpModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <form action="" method="post">
            {{ csrf_field() }}
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create New Employee</h4>
        </div>
        <div class="modal-body">
          <div class="wrapper newEmployeeModal">
              <div class="row">
                <div class="col-md-6">
                  <label for="employeeID">Employee ID</label>
                  <input id="employeeID" type="text" name="empId" required="required" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="assignWork">Assigned Work</label>
                  <input id="assignWork" type="text" name="assignedWork" required="required" class="form-control">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-4">
                  <label for="fname">First Name</label>
                  <input id="fname" type="text" name="firstName" required="required" class="form-control">
                </div>
                <div class="col-md-4">
                  <label for="midinitial">Middle Initial</label>
                  <input id="midinitial" type="text" name="middleinitial" required="required" class="form-control">
                </div>
                <div class="col-md-4">
                  <label for="lname">Last Name</label>
                  <input id="lname" type="text" name="lastName" required="required" class="form-control">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-4">
                  <label for="gender">Gender</label>
                  <br>
                  <label class="radio-inline"><input type="radio" name="optradio">Male</label>
                  <label class="radio-inline"><input type="radio" name="optradio">Female</label>
                </div>
                <div class="col-md-8">
                  <label for="birthdate">Birthdate</label>
                  <input id="birthdate" type="date" name="birthDate" required="required" class="form-control">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-4">
                    <label for="cntactNum">Contact Number</label>
                    <input id="cntactNum" type="text" name="contactNum" required="required" class="form-control">
                </div>
                <div class="col-md-8">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" name="email" required="required" class="form-control">
                </div>
              </div>            
            <br>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btnsubmit">Submit</button>
          <button type="button" class="btn btn-danger btnclose" data-dismiss="modal">Cancel</button>          
        </div>
        </form>
      </div>
      
    </div>
  </div>
   
   <!-- Modal -->
  <div class="modal fade" id="editEmpModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <form action="" method="post">
            {{ csrf_field() }}
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Employee</h4>
        </div>
        <div class="modal-body">
          <div class="wrapper newEmployeeModal">
              <div class="row">
                <div class="col-md-6">
                  <label for="employeeID">Employee ID</label>
                  <input id="employeeID" type="text" name="empId" required="required" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="assignWork">Assigned Work</label>
                  <input id="assignWork" type="text" name="assignedWork" required="required" class="form-control">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-4">
                  <label for="fname">First Name</label>
                  <input id="fname" type="text" name="firstName" required="required" class="form-control">
                </div>
                <div class="col-md-4">
                  <label for="midinitial">Middle Initial</label>
                  <input id="midinitial" type="text" name="middleinitial" required="required" class="form-control">
                </div>
                <div class="col-md-4">
                  <label for="lname">Last Name</label>
                  <input id="lname" type="text" name="lastName" required="required" class="form-control">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-4">
                  <label for="gender">Gender</label>
                  <br>
                  <label class="radio-inline"><input type="radio" name="optradio">Male</label>
                  <label class="radio-inline"><input type="radio" name="optradio">Female</label>
                </div>
                <div class="col-md-8">
                  <label for="birthdate">Birthdate</label>
                  <input id="birthdate" type="date" name="birthDate" required="required" class="form-control">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-4">
                    <label for="cntactNum">Contact Number</label>
                    <input id="cntactNum" type="text" name="contactNum" required="required" class="form-control">
                </div>
                <div class="col-md-8">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" name="email" required="required" class="form-control">
                </div>
              </div>            
            <br>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btnsubmit">Update</button>
          <button type="button" class="btn btn-danger btnclose" data-dismiss="modal">Cancel</button>          
        </div>
        </form>
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

</script>

@endsection