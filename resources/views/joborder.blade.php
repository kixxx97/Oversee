@extends('layouts.master')

@section('content')

<div class="container-fluid">
  <div class="row">    

@include('includes.navbar')

@include('includes.sidebar')

  <div class="container-fluid jobordercontent">
  <br><br>
    <ul class="nav nav-pills">
      <li class="active"><a data-toggle="pill" href="#create">Create</a></li>
      <li><a data-toggle="pill" href="#view">View</a></li>
    </ul>
    
    <div class="tab-content">
      <div id="create" class="tab-pane fade in active">
          <div class="container-fluid createJOcontainer">
              <br><br>
              <form method ="post" action ="{{url('/joborder/create')}}">
              {{ csrf_field() }}
              <div class="row">
              {{ $ctr = 0 }}
              @foreach($products as $product)
              @if($ctr % 4 == 0)
              <div class="row">
              @endif
              
              <?php $ctr++; ?>
              <div class="col-md-3 portfolio-item">
                      <div class="text-center">
                      <br><br>
                          <center><img class="img-responsive coke-product" style="width: 65%; border: 5px solid #2A2D35" src="assets/img/{{$ctr}}.png"></center>
                          <br>
                          <h4>Coca-Cola Classic</h4>
                          <span>Quantity:</span>
                          <input type ="hidden" value ="{{$product->productID}}" name ="product[{{$ctr}}][id]"/>
                          <input type="text" value ="0" name ="product[{{$ctr}}][qty]">
                          <br><br>
                      </div>
              </div>
                     
              @if($ctr % 4 == 0)
              </div>
              @endif
              @endforeach
                  
                                   
              <br><br>
              <center><input type ="submit" value = "Start Job Order" </center>
              </form>
              <div class="row"><br><br></div>
          </div>

        <!-- Modal -->
  <div class="modal fade" id="startjoborderErrorModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Error</h4>
        </div>
        <div class="modal-body">
          <h4>Insufficient Raw Materials</h4>
          <br>
          <p>Supply for product Coke does not suffice for its required raw materials</p>
          <p>Coke Order : 300pcs</p>
          <p>Estimated Production : 250pcs</p>
          <br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel Job Order</button>
          <button type="button" class="btn btn-default">Proceed Job Order</button>
        </div>
      </div>
      
    </div>
  </div>

      </div>
      <div id="view" class="tab-pane fade">
        <br><br>
        <ul class="nav nav-pills">
          <li class="active"><a data-toggle="pill" href="#ongoing">On going</a></li>
          <li><a data-toggle="pill" href="#readytodeliver">Ready to deliver</a></li>
          <li><a data-toggle="pill" href="#all">All</a></li>
        </ul>
        
        <div class="tab-content tabcontent2">
          <div id="ongoing" class="tab-pane fade in active">
            <table id="onGoing" class="table-hover">
              <thead>
                <tr>
                  <th>Job Order ID</th>
                  <th>Job Order Type</th>
                  <th>Status</th>
                  <th>Percentage</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>200</td>
                  <td>Customer</td>
                  <td>ONGOING</td>
                  <td>70%</td>
                  <td><a href="#ongoingstep2table"><button class="btn" onclick="showstep2();">View</button></a></td>
                </tr>
              </tbody>
            </table>

            <div id="ongoingstep2" class="container-fluid hidden">
            <br><br><br>
              <div class="col-md-6">                
              <h4>Customer Name : Gil Ralph Canedo</h4>
              <h5>Job Order Percentage : 72%</h5>
              <h5>Status : Ongoing</h5>
              </div>
              <div class="col-md-6">                
              <h4>Delivery Date : Sunod tuig</h4>
              <h5>Delivery Address : Minglanilla, Cebu</h5>
              <h5>Delivery Guy: Donald Trump</h5>
              </div>

              <br>

              <table id="ongoingstep2table" class="table-hover">
              <thead>
                <tr>
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Quantity</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>200</td>
                  <td>COKE</td>
                  <td>500</td>
                  <td><a href="#ongoingstep3table"><button class="btn" onclick="showstep3();">View</button></a></td>
                </tr>
              </tbody>
            </table>

            </div>

            <div id="ongoingstep3" class="container-fluid hidden">
            <br><br><br>
              <div class="col-md-7">
              <h4>&nbsp</h4>
              <h4>&nbsp</h4>
                <table id="ongoingstep3table" class="table-hover">
                  <thead>
                    <tr>
                      <th>Worker Name</th>
                      <th>Quantity Produced</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Gil Ralph Canedo</td>
                      <td>210</td>
                      <td><a href="#ongoingstep4table"><button class="btn" onclick="showstep4();">View</button></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div id="ongoingstep4" class="col-md-5 hidden">
              <br>
              <h3>Gil Ralph Canedo's Productivity</h3>
              <br>
                <table id="ongoingstep4table" class="table-hover">
                  <thead>
                    <tr>
                      <th>Check #</th>
                      <th>Quantity</th>
                      <th>Quantity Left</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>70</td>
                      <td>30</td>
                      <td>Febuary 14, 2017</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

          </div>

          <div id="readytodeliver" class="tab-pane fade">
            <table id="readytoDeliver" class="table-hover">
              <thead>
                <tr>
                  <th>Job Order ID</th>
                  <th>Customer Name</th>
                  <th>Delivery Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>200</td>
                  <td>Gil Ralph Canedo</td>
                  <td>READY TO DELIVER</td>
                  <td><a href="#"><button class="btn" onclick="showstep2ready();">View</button></a></td>
                </tr>

              </tbody>
            </table>

            
            <div id="readydeliverstep2" class="container-fluid hidden">
            <br><br><br>
              <div class="col-md-6">                
              <h4>Customer Name : Gil Ralph Canedo</h4>
              <h5>Job Order Percentage : 72%</h5>
              <h5>Status : Ready to deliver</h5>
              </div>
              <div class="col-md-4">                
              <h4>Delivery Date : Sunod tuig</h4>
              <h5>Delivery Address : Minglanilla, Cebu</h5>
              <h5>Delivery Guy: Donald Trump</h5>
              </div>
              <div class="col-md-2">
                <h4>Total: P2,000.00</h4>
                <button class="btn btndeliver" onclick="btnDeliverAction();">Deliver</button>
              </div>

              <br>

              <table id="readydeliverstep2table" class="table-hover">
              <thead>
                <tr>
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Quantity</th>
                  <th>Unit Price</th>
                  <th>Total Amount</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>200</td>
                  <td>COKE</td>
                  <td>500</td>
                  <td>Php 1.50</td>
                  <td>250</td>
                  <td><a href="#readydeliverstep3table"><button class="btn" onclick="showstep3ready();">View</button></a></td>
                </tr>
              </tbody>
            </table>

            </div>

            <div id="readydeliverstep3" class="container-fluid hidden">
            <br><br><br>
              <div class="col-md-7">
              <h4>&nbsp</h4>
              <h4>&nbsp</h4>
                <table id="readydeliverstep3table" class="table-hover">
                  <thead>
                    <tr>
                      <th>Worker Name</th>
                      <th>Quantity Produced</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Gil Ralph Canedo</td>
                      <td>210</td>
                      <td><a href="#readydeliverstep4table"><button class="btn" onclick="showstep4ready();">View</button></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div id="readydeliverstep4" class="col-md-5 hidden">
              <br>
              <h3>Gil Ralph Canedo's Productivity</h3>
              <br>
                <table id="readydeliverstep4table" class="table-hover">
                  <thead>
                    <tr>
                      <th>Check #</th>
                      <th>Quantity</th>
                      <th>Quantity Left</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>70</td>
                      <td>30</td>
                      <td>Febuary 14, 2017</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div id="all" class="tab-pane fade">
            
            <table id="All" class="table-hover">
              <thead>
                <tr>
                  <th>Job Order ID</th>
                  <th>Job Order Type</th>
                  <th>Status</th>
                  <th>Percentage</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>200</td>
                  <td>Customer</td>
                  <td>ONGOING</td>
                  <td>75%</td>
                  <td><a href="#"><button class="btn" onclick="showstep2all();">View</button></a></td>
                </tr>
              </tbody>
            </table>

            
            <div id="allstep2" class="container-fluid hidden">
            <br><br><br>
              <div class="col-md-8">                
              <h4>Customer Name : Gil Ralph Canedo</h4>
              <h5>Job Order Percentage : 72%</h5>
              <h5>Status : Ready to deliver</h5>
              </div>
              <div class="col-md-4">                
              <h4>Estimated Date of Completion : Sunod tuig</h4>
              </div>

              <br>

              <table id="allstep2table" class="table-hover">
              <thead>
                <tr>
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Quantity Benchmark</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>200</td>
                  <td>COKE</td>
                  <td>500</td>
                  <td><a href="#allstep3table"><button class="btn" onclick="showstep3all();">View</button></a></td>
                </tr>
              </tbody>
            </table>

            </div>

            <div id="allstep3" class="container-fluid hidden">
            <br><br><br>
              <div class="col-md-7">
              <h4>&nbsp</h4>
              <h4>&nbsp</h4>
                <table id="allstep3table" class="table-hover">
                  <thead>
                    <tr>
                      <th>Worker Name</th>
                      <th>Quantity Produced</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Gil Ralph Canedo</td>
                      <td>210</td>
                      <td><a href="#allstep4table"><button class="btn" onclick="showstep4all();">View</button></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div id="allstep4" class="col-md-5 hidden">
              <br>
              <h3>Gil Ralph Canedo's Productivity</h3>
              <br>
                <table id="allstep4table" class="table-hover">
                  <thead>
                    <tr>
                      <th>Check #</th>
                      <th>Quantity</th>
                      <th>Quantity Left</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>70</td>
                      <td>30</td>
                      <td>Febuary 14, 2017</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
</div>

<script>
$(document).ready(function(){
    $('#onGoing').dataTable( {
        "pageLength": 10,
        "oLanguage": {
                 "oPaginate": {
                    "sNext": "<i style='position: relative; top:2px;' class='fa fa-angle-right'></i>",
                "sPrevious": "<i style='position: relative; top:2px;' class='fa fa-angle-left'></i>"
                  }
              }
    });

    $('#readytoDeliver').dataTable( {
        "pageLength": 10,
        "oLanguage": {
                 "oPaginate": {
                    "sNext": "<i style='position: relative; top:2px;' class='fa fa-angle-right'></i>",
                "sPrevious": "<i style='position: relative; top:2px;' class='fa fa-angle-left'></i>"
                  }
              }
    });

    $('#All').dataTable( {
        "pageLength": 10,
        "oLanguage": {
                 "oPaginate": {
                    "sNext": "<i style='position: relative; top:2px;' class='fa fa-angle-right'></i>",
                "sPrevious": "<i style='position: relative; top:2px;' class='fa fa-angle-left'></i>"
                  }
              }
    });

    $('#ongoingstep2table').dataTable( {
        "pageLength": 10,
        "oLanguage": {
                 "oPaginate": {
                    "sNext": "<i style='position: relative; top:2px;' class='fa fa-angle-right'></i>",
                "sPrevious": "<i style='position: relative; top:2px;' class='fa fa-angle-left'></i>"
                  }
              }
    });

    $('#ongoingstep3table').dataTable( {
        "pageLength": 10,
        "oLanguage": {
                 "oPaginate": {
                    "sNext": "<i style='position: relative; top:2px;' class='fa fa-angle-right'></i>",
                "sPrevious": "<i style='position: relative; top:2px;' class='fa fa-angle-left'></i>"
                  }
              }
    });

    $('#ongoingstep4table').dataTable( {
        "pageLength": 10,
        "oLanguage": {
                 "oPaginate": {
                    "sNext": "<i style='position: relative; top:2px;' class='fa fa-angle-right'></i>",
                "sPrevious": "<i style='position: relative; top:2px;' class='fa fa-angle-left'></i>"
                  }
              }
    });

    $('#readydeliverstep2table').dataTable( {
        "pageLength": 10,
        "oLanguage": {
                 "oPaginate": {
                    "sNext": "<i style='position: relative; top:2px;' class='fa fa-angle-right'></i>",
                "sPrevious": "<i style='position: relative; top:2px;' class='fa fa-angle-left'></i>"
                  }
              }
    });

    $('#readydeliverstep3table').dataTable( {
        "pageLength": 10,
        "oLanguage": {
                 "oPaginate": {
                    "sNext": "<i style='position: relative; top:2px;' class='fa fa-angle-right'></i>",
                "sPrevious": "<i style='position: relative; top:2px;' class='fa fa-angle-left'></i>"
                  }
              }
    });

    $('#readydeliverstep4table').dataTable( {
        "pageLength": 10,
        "oLanguage": {
                 "oPaginate": {
                    "sNext": "<i style='position: relative; top:2px;' class='fa fa-angle-right'></i>",
                "sPrevious": "<i style='position: relative; top:2px;' class='fa fa-angle-left'></i>"
                  }
              }
    });

    $('#allstep2table').dataTable( {
        "pageLength": 10,
        "oLanguage": {
                 "oPaginate": {
                    "sNext": "<i style='position: relative; top:2px;' class='fa fa-angle-right'></i>",
                "sPrevious": "<i style='position: relative; top:2px;' class='fa fa-angle-left'></i>"
                  }
              }
    });

    $('#allstep3table').dataTable( {
        "pageLength": 10,
        "oLanguage": {
                 "oPaginate": {
                    "sNext": "<i style='position: relative; top:2px;' class='fa fa-angle-right'></i>",
                "sPrevious": "<i style='position: relative; top:2px;' class='fa fa-angle-left'></i>"
                  }
              }
    });

    $('#allstep4table').dataTable( {
        "pageLength": 10,
        "oLanguage": {
                 "oPaginate": {
                    "sNext": "<i style='position: relative; top:2px;' class='fa fa-angle-right'></i>",
                "sPrevious": "<i style='position: relative; top:2px;' class='fa fa-angle-left'></i>"
                  }
              }
    });
});

function btnDeliverAction() {
  alert('Contacting customer for estimated time of arrival and order details');
}

function showstep2() {
  $('#ongoingstep2').removeClass('hidden');
}

function showstep3() {
  $('#ongoingstep3').removeClass('hidden');
}

function showstep4() {
  $('#ongoingstep4').removeClass('hidden');
}

function showstep2ready() {
  $('#readydeliverstep2').removeClass('hidden');
}

function showstep3ready() {
  $('#readydeliverstep3').removeClass('hidden');
}

function showstep4ready() {
  $('#readydeliverstep4').removeClass('hidden');
}

function showstep2all() {
  $('#allstep2').removeClass('hidden');
}

function showstep3all() {
  $('#allstep3').removeClass('hidden');
}

function showstep4all() {
  $('#allstep4').removeClass('hidden');
}

</script>

@endsection