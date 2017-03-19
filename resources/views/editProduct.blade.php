@extends('layouts.master')

@section('content')

<div class="container-fluid">
  <div class="row">    

@include('includes.navbar')
@include('includes.sidebar')

  </div>
    
  <div class="container-fluid editproductcontent">
        <div class="container-fluid">
            <div class="row">
                <h3>Define Workflow</h3>
            <section>
                <div class="wizard">

                        <ul class="nav nav-wizard">

                            <li class="active">
                                <a href="#step1" data-toggle="tab">Procedure 1</a>
                            </li>

                            <li class="disabled">
                                <a href="#step2" data-toggle="tab">Procedure 2</a>
                            </li>

                            <li class="disabled">
                                <a href="#step3" data-toggle="tab">Procedure 3</a>
                            </li>

                            <li class="disabled">
                                <a href="#step4" data-toggle="tab">Procedure 4</a>
                            </li>
                            <li class="addworkflowLink">
                                <a data-toggle="modal" href="#addworkflowmodal"><span> + Add Workflow</span></a>
                            </li>
                        </ul>


                    <form>
                        <div class="tab-content">
                            <div class="tab-pane active" id="step1">
                                <h3>Procedure 1</h3>
                                <p class="step-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <br>
                                <ul class="list-inline pull-left">
                                    <li><h5>Actions:</h5></li>
                                    <li><a data-toggle="modal" href="#editworkflowmodal"><button class="btn btn-primary">Edit</button></a> <a href="#"><button class="btn btn-danger">Delete</button></a></li>
                                </ul>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-primary continueBtn">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" id="step2">
                                <h3>Procedure 2</h3>
                                <p class="step-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <br>
                                <ul class="list-inline pull-left">
                                    <li><h5>Actions:</h5></li>
                                    <li><a data-toggle="modal" href="#editworkflowmodal"><button class="btn btn-primary">Edit</button></a> <a href="#"><button class="btn btn-danger">Delete</button></a></li>
                                </ul>
                                <ul class="list-inline pull-right">
                                   <li><button type="button" class="btn btn-primary continueBtn">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" id="step3">
                                <h3>Procedure 3</h3>
                                <p class="step-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <br>
                                <ul class="list-inline pull-left">
                                    <li><h5>Actions:</h5></li>
                                    <li><a data-toggle="modal" href="#editworkflowmodal"><button class="btn btn-primary">Edit</button></a> <a href="#"><button class="btn btn-danger">Delete</button></a></li>
                                </ul>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-primary continueBtn">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" id="step4">
                                <h3>Procedure 4</h3>
                                <p class="step-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <br>
                                <ul class="list-inline pull-left">
                                    <li><h5>Actions:</h5></li>
                                    <li><a data-toggle="modal" href="#editworkflowmodal"><button class="btn btn-primary">Edit</button></a> <a href="#"><button class="btn btn-danger">Delete</button></a></li>
                                </ul>
                            </div>
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
          <form>
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Add Workflow</h4>
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
                      <button type="submit" class="btn btn-primary"> Add Workflow</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  </div>
           </form>
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
</script>
@endsection