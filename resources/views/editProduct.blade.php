@extends('layouts.master')

@section('content')

<div class="container-fluid">
  <div class="row">    

@include('includes.navbar')
@include('includes.sidebar')

  </div>
<meta name ="csrf-token" content = "{{csrf_token() }}"/>
    
  <div class="container-fluid editproductcontent">
        <div class="container-fluid">
            <div class="row">
                <h3>Define Workflow</h3>
            <section>
                <div class="wizard">

                        <ul class="nav nav-wizard">
                            <?php $ctr = 0; ?>
                            @foreach($workflows as $workflow)
                            @if($ctr == 0)
                            <li class="active">
                            <?php $ctr++; ?>
                                <a href="#{{$workflow->workFlowID}}" data-toggle="tab">Procedure {{ $workflow->stepNumber }}</a>
                            </li>
                            @else
                            <li class="enabled">
                            <?php $ctr++ ?>
                                <a href="#{{$workflow->workFlowID}}" data-toggle="tab">Procedure {{ $workflow->stepNumber }}</a>
                            </li>
                            @endif
                            @endforeach
                            <li class="addworkflowLink">
                                <a data-toggle="modal" href="#addworkflowmodal"><span> + Add Workflow</span></a>
                            </li>
                        </ul>


                    <form>
                        <div class="tab-content">
                            <?php $ctr = 0; ?>
                            @foreach($workflows as $workflow)
                            @if($ctr == 0)
                            <?php $ctr++; ?>
                            <div class="tab-pane active" id="{{$workflow->workFlowID}}">
                                <h3>{{$workflow->workFlowTitle}}</h3>
                                <p class="step-description">
                                    <label>
                                        Description:
                                    </label>
                                    {{$workflow->workFlowDescription}} <br>
                                    <label>
                                        Raw Material:
                                    </label>
                                    {{$workflow->rawMaterials->rawMaterialName}} <br>
                                    <label>
                                        Quantity of Raw Material:
                                    </label>
                                    {{$workflow->rawMatsQty}}<br>
                                    <label>
                                        Manhours Required:
                                    </label>
                                    {{$workflow->manHours}}<br>
                                    <label>
                                        Rate per piece:
                                    </label>
                                    {{$workflow->payRate}}<br>
                                    <label>
                                        Employee Assigned:
                                    </label><br>
                                    @foreach($assigned as $assigned_employee)
                                        @foreach($assigned_employee as $item)
                                            @if($item->workFlowID == $workflow->workFlowID)
                                                {{$item->employee->firstName.' '.$item->employee->lastName}}
                                                <br>
                                            @endif
                                        @endforeach
                                    @endforeach
                              
                                </p>
                                <br>
                                <ul class="list-inline pull-left">
                                    <li><h5>Actions:</h5></li>
                                   <li><button class ="btn btn-success assignEmp" name = "assignEmp" data-id="{{$workflow->workFlowID}}">Assign</button>
                                       <button class="btn btn-primary editWorkflow" name = "editWorkflow" data-id="{{$workflow->workFlowID}}">Edit</button>
                                       <button class="btn btn-danger deleteWorflow" name = "deleteWorflow" data-id="{{$workflow->workFlowID}}">Delete</button></li>
                                </ul>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-primary continueBtn">Continue</button></li>
                                </ul>
                            </div>
                            @else
                            <div class="tab-pane" id="{{$workflow->workFlowID}}">
                                <h3>{{$workflow->workFlowTitle}}</h3>
                                <p class="step-description">
                                    <label>
                                        Description:
                                    </label>
                                    {{$workflow->workFlowDescription}} <br>
                                    <label>
                                        Raw Material:
                                    </label>
                                    {{$workflow->rawMaterials->rawMaterialName}} <br>
                                    <label>
                                        Quantity of Raw Material:
                                    </label>
                                    {{$workflow->rawMatsQty}}<br>
                                    <label>
                                        Manhours Required:
                                    </label>
                                    {{$workflow->manHours}}<br>
                                    <label>
                                        Rate per piece:
                                    </label>
                                    {{$workflow->payRate}}<br>
                                    
                                </p>
                                <br>
                                <ul class="list-inline pull-left">
                                    <li><h5>Actions:</h5></li>
                                   <li><button class ="btn btn-success assignEmp" name = "assignEmp" data-id="{{$workflow->workFlowID}}">Assign</button>
                                       <button class="btn btn-primary editWorkflow" name = "editWorkflow" data-id="{{$workflow->workFlowID}}">Edit</button>
                                       <button class="btn btn-danger deleteWorflow" name = "deleteWorflow" data-id="{{$workflow->workFlowID}}">Delete</button></li>
                                </ul>
                                <ul class="list-inline pull-right">
                                   <li><button type="button" class="btn btn-primary continueBtn">Continue</button></li>
                                </ul>
                            </div>
                            @endif
                            @endforeach
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </section>
           </div>
        </div>
  </div>
    
  <!-- ADD WORKFLOW MODAL -->
  <div id="addworkflowmodal" class="modal fade" role="dialog">                
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <form action = "{{ url('inventory/workflow/add') }}" method = "POST">
        {{csrf_field()}}
        <input type= ="text" class ="hidden" value ="{{$product->productID}}" name ="prodID">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Add Workflow</h4>
              </div>
          <div class="modal-body">
              <div class="container-fluid">
                  <div class="col-md-6">
                    <div class ="form-group">
                       Step Number:<br>
                       <input type ="text" name ="stepnumber" class ="form-control">
                    </div>
                    <div class ="form-group">
                       Title:<br>
                       <input type ="text" name ="title" class ="form-control">
                    </div>
                    <div class="form-group">
                       Description:<br>
                       <textarea style="resize: none;" class="form-control" name="description" rows="5"></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class ="form-group">
                       Pre-requisite:<br>
                       <select class ='form-control' name = 'pre-prequisite'>
                       @foreach($workflows as $workflow)
                       
                       <option value ="{{$workflow->workFlowID}}">{{$workflow->workFlowTitle}}</option>
                       @endforeach
                       </select>
                    </div>
                    <div class ="form-group">
                       Raw Material Requirement:<br>
                       <select class ='form-control' name = 'rawMats'>
                       @foreach($rawMats as $rawMat)
                       
                       <option value ="{{$rawMat->rawMaterialsID}}">{{$rawMat->rawMaterialName}}</option>
                       @endforeach
                       </select>
                    </div>
                    <div class ="form-group">
                       Raw Material Quantity:<br>
                       <input type ="text" name ="rawMatQty" class ="form-control">
                    </div>
                    <div class ="form-group">
                       Man Hours:<br>
                       <input type ="text" name ="manhours" class ="form-control">
                    </div>
                    <div class ="form-group">
                       Pay rate:<br>
                       <input type ="text" name ="payrate" class ="form-control">
                    </div>
                  </div>
              </div>
                   <div class="modal-footer">
                      <button type="submit" class="btn btn-primary"> Add Workflow</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  </div>
           </form>
          </div>
      </div>
    </div>                    
    </div>
  
  <!-- EDIT WORKFLOW MODAL -->
  <div id="editworkflowmodal" class="modal fade" role="dialog">                
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
          <form>
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Edit Workflow</h4>
              </div>
          <div class="modal-body">
              <div class ="form-group">
                 Workflow Title:<br>
                 <input type ="text" name ="workflowtitle" class ="form-control"><br>
                 Description:<br>
                 <textarea style="resize: none;" class="form-control" rows="5"></textarea>
              </div>
          </div>
                   <div class="modal-footer">
                      <button type="submit" class="btn btn-primary"> Update Workflow</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  </div>
           </form>
      </div>
    </div>                    
    </div>
  
  
<form action = "{{ url('inventory/workflow/assign') }}" method = "POST">
 {{csrf_field()}}
  <div class="modal fade" id="assignEmp" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Assign Employee</h4>
        </div>
        <div class="modal-body">
          <div class="wrapper newEmployeeModal">
                      <input type= ="text" class ="hidden" value ="{{$product->productID}}" name ="prodID">
            <label for="numProds">Employee:</label>
            <select class = "form-control" name="agent_id" id = "agentName">

            </select>
            <br>
          </div>
        </div>
        <div class="modal-footer">     
          <button type="submit" class="btn btn-primary btn submit">Submit</button>
          <button type="button" class="btn btn-danger btnclose" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      </form>
    </div>
  </div>
    
    
    
</div>


<script>
    $(document).ready(function () {
  
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".continueBtn").click(function (e) {

        var $active = $('.wizard .nav-wizard li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}

 $('.assignEmp').on('click', function(e)
 {
    e.preventDefault();
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $id = $(this).data("id");
    $("#assignEmp").append('<input type = "text" class ="hidden" name = "workFlowID" value = "'+$id+'">');
    $.ajax({
        method: "post",
        url: "../../getEmployees",
        data: {'_token': CSRF_TOKEN
               },
        success: function(employee) {
          console.log(employee);
          var employees = employee;
          $("#agentName").empty();
          $.each(employee,function(key,value)
          {
             $("#agentName").append('<option value = "'+value.employeeID+'">'+value.firstName + ' ' + value.lastName+'</option>'); 
          });
        },
        error: function() {

            alert('An error occured.');
        }
    });
    
     $("#assignEmp").modal('show');
     
 });
</script>
@endsection