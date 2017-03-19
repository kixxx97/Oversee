@extends('layouts.master')

<body style ="background-color: white !important">
        <link rel="stylesheet" type="text/css" href="assets/testCSS/homestyle.css">
@include('includes.navbarLogin')
<br><br>
<center>
    <img class="img-responsive" style="width: 400px;" src="assets/img/coca_cola_logo.png">
    <br>
<br><br><br>

<div class="container">
	<div class="navbar">
	  <ul class="nav nav-justified" id="myNav">
	    <li><a href="{{url('/')}}">Home</a></li>
	    <li><a class="active" href="{{url('/shop')}}">Shop</a></li>
	    <li><a href="#">About us</a></li>
	    <li><a href="#">Contact Us</a></li>
	  </ul>
	</div>
</div>

<div class="container-fluid">
    <form action = "{{ url('shop/create') }}" method = "POST">
        {{csrf_field()}}

	<div class="container">
	<div class="col-md-4">
			<label class="pull-left">First Name</label>
			<input type="text" name = 'fname' class="form-control">

			<label class="pull-left">Last Name</label>
			<input type="text" name = 'lname' class="form-control">

			<label class="pull-left">Email Address</label>
			<input type="text" name = 'email' class="form-control">

			<label class="pull-left">Contact Number</label>
			<input type="text" name = 'contactnum' class="form-control">

			<label class="pull-left">Complete Address</label>
			<input type="text" name = 'address'class="form-control">
	</div>
		
	</div>
	<br>
	<div class="container">
		<br><br><br>
		<br>
		
		<div class="col-md-4"><img class="coke-product" src="assets/img/1.png"><br><span class="itemName"><br>Coca-Cola Classic</span>
    		<br>Price: P99.75 per pc
    <br>Quantity <input type="text" name =""> <span class="redAsterisk">*20 per pack</span>
		</div>

		<div class="col-md-4"><img class="coke-product" src="assets/img/2.png"><br><span class="itemName"><br>Coca-Cola Zero</span>
		<br>Price: P99.75 per pc
    <br>Quantity <input type="text"> <span class="redAsterisk">*20 per pack</span>
		</div>

		<div class="col-md-4"><img class="coke-product" src="assets/img/3.png"><br><span class="itemName"><br>Sprite</span>
		<br>Price: P99.75 per pc
    <br>Quantity <input type="text"> <span class="redAsterisk">*20 per pack</span>
		</div>

	</div>

	<div class="container">
		<br><br><br>
		<br>
		
		<div class="col-md-4"><img class="coke-product" src="assets/img/4.png"><br><span class="itemName"><br>Caffeine-Free Coca-Cola Zero</span>
		<br>Price: P99.75 per pc
    <br>Quantity <input type="text"> <span class="redAsterisk">*20 per pack</span>
		</div>

		<div class="col-md-4"><img class="coke-product" src="assets/img/5.png"><br><span class="itemName"><br>Coca-Cola Diet</span>
		<br>Price: P99.75 per pc
    <br>Quantity <input type="text"> <span class="redAsterisk">*20 per pack</span>
		</div>

		<div class="col-md-4"><img class="coke-product" src="assets/img/6.png"><br><span class="itemName"><br>Coca-Cola Cherry Zero</span>
		<br>Price: P99.75 per pc
    <br>Quantity <input type="text"> <span class="redAsterisk">*20 per pack</span>
		</div>

	</div><br><br>
        <input type ="submit" class="btn btn-success" name ="cart" value ="Purchase!"/>
    </form>
	<br><br>
	<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#shoppingCart">Confirm</button></center>
	

	<br><br><br><hr>

	<div class="container">
		<div class="col-md-4"><h4>Latest News</h4>
			<br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
		<div class="col-md-4"><h4>Follow Us</h4>
			<ul class="nav navbar-nav pull-right gamaypa">
		      <li><a href="#"><img class="socialIcons" src="assets/img/fb.png"></a></li>
		      <li><a href="#"><img class="socialIcons" src="assets/img/twitter.png"></a></li>
		      <li><a href="#"><img class="socialIcons" src="assets/img/googleplus.png"></a></li>
		      <li><a href="#"><img class="socialIcons" src="assets/img/pinterest.png"></a></li>
		      <li><a href="#"><img class="socialIcons" src="assets/img/linkedin.png"></a></li>
		    </ul>
		</div>
		<div class="col-md-4"><h4>Newsletter</h4>
			<span>For latest news, offers and hangyo</span>
			<br>
			<input type="text"><br>
			<button type="button" class="btn colorblue">Subscribe</button>
		</div>
	</div>
        <br>
</div>

  <!-- Modal -->
  <div class="modal fade" id="shoppingCart" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Shopping Cart</h4>
        </div>
        <div class="modal-body">
          <p>Specific Product : 300pcs</p>
          <p>Specific Product : 300pcs</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-default" onclick="closeModal();">Confirm</button>
        </div>
      </div>
      
    </div>
  </div>

      <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Sign In / Register</h4>
                </div>               
                
                <div class="modal-body">                                       
                <div class="col-md-6 col-sm-6 no-padng">
                    <div class="model-l">                    
                    <form method="post" id="logFrm" class="log-frm" name="logFrm"> 
                    <ul>                                                     
                        <li>Username</li>
                        <li> <input type="text" placeholder="Username" id="userName" name="userName" class="form-control" onfocus="checkNullProf();"></li>
                        <li>Password</li>
                        <li><input type="password" placeholder="Password" id="password" name="password" class="form-control" onfocus="checkNullProf();"></li>                                                
                        <li><br/><button type="button" onclick="userLogin();" id="logBtn" class="btn btn-default">Submit</button></li>
                        <div style="display:none;" id="loginFail" class="sign">
                        <li> <font color="red">  Username or password is incorrect.</font></li>
                        </div>
                           </ul>
                            </form>                      
                                <div class="clearfix"></div>
                                 <form method="post" id="logFrm1" class="log-frm" name="logFrm1"> 
                                <ul>                                    
                                    <li>
                                        <a class="for-got" onclick="ayantoggle();" href="javascript:;">Forgot your password?</a>
                                        <div class="forgot">
                                        <ul>                                          
                                        <li><p>Enter your Email Address here to receive a link to change password.</p></li>
                                        <li>Email Address</li>
                                        <li><input type="text" placeholder="Your email address" id="forgetemailId" class="form-control" name="forgetemailId"></li>
                                        <li><button type="button" class="btn btn-default" onclick="forgot();">Send Mail</button></li>
                                    </ul> 
                                </div>
                            </li>
                        </ul>
                 </form>
                    </div>
                    </div>    
                    <div class="col-md-6 col-sm-6 no-padng">
                        <div class="model-r">
                        <div class="o-r">
                        <span>OR</span>
                        </div>
                             <form method="post" id="userRegisterFrm" class="log-frm" name="userRegisterFrm">  
                            <ul>
                             <li>First Name</li>
                            <li><input type="text" placeholder="First Name" name="fName" class="form-control"></li>
                             <li>Last Name</li>
                            <li><input type="text" placeholder="Last Name" name="lName" class="form-control"></li>
                            <li>Username</li>
                            <li><input type="text" placeholder="Username" name="username" class="form-control"></li>
                            <li>Password</li>
                            <li><input type="password" placeholder="Password" name="password" class="form-control"></li>
                            <li>Confirm Password</li>
                            <li><input type="password" placeholder="Confirm Password" name="repassword" class="form-control"></li>
                           <br> <li><button type="button" name="userRegBtn" class="btn btn-default">Signup Now</button></li>
                             <div style="display:none;" class="sign greenglow">
                                 <li>   <i class="icon-check"></i><br>
                                     <font color="red"> 
                                     User registration successful.<br>
                                      Your login Url already send to your email.
                                     
                                     </font></li>
                          </div>
                           <div style="display:none;" id="regnSuc11" class="sign redglow">
                               <li>   <i class="icon-mail"></i><br>
                                   <font color="red">    Email Exist.</font></li>
                          </div> 
                        </ul>
                    </form>
                        </div>
                        </div>
                        
                        <div class="clearfix"></div>
                    </div>
            </div>
        </div>
    </div>

   <!-- Modal -->
  <div class="modal fade" id="paymentMethod" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Choose Payment Method</h4>
        </div>
        <div class="modal-body">
          <div class="radio">
    			  <label><input type="radio" id="cashondel" name="optradio">Cash on Delivery</label>
    			</div>
    			<div class="radio">
    			  <label><input type="radio" id="paypal" name="optradio">Paypal</label>
    			</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-default" onclick="closeModal2();">Confirm</button>
        </div>
      </div>
      
    </div>
  </div>

     <!-- Modal -->
  <div class="modal fade" id="cod" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Payment Details</h4>
        </div>
        <div class="modal-body">
            <form>
              <h4>Name</h4>
              <p>Gil Ralph Canedo</p>
              <br>

              <h4>Contact Number</h4>
              <p>+639234567890</p>
              <br>

              <h4>Complete Address</h4>
              <p>Minglanilla, Cebu</p>
              <br>

              <h5>Total Amount : P500.00</h5>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-default" onclick="closeModal3();">Confirm</button>
        </div>
      </div>
      
    </div>
  </div>

       <!-- Modal -->
  <div class="modal fade" id="paypalmodal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login to your PayPal account</h4>
        </div>
        <div class="modal-body">
          <div class="wrapper loginpaypalcontainer">
            <form>
                <label class="pull-left">Username</label>
                <input type="text" class="form-control">
                <label class="pull-left">Password</label>
                <input type="password" class="form-control">
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-default" onclick="closeModal4();">Confirm</button>
        </div>
      </div>
      
    </div>
  </div>

       <!-- Modal -->
  <div class="modal fade" id="paymentSucces" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Successful</h4>
        </div>
        <div class="modal-body">
            <form>
        			<h4>Total Payment on Delivery</h4>
        			<p>P500.00</p>
        			<br>

        			<p>Thank you for purchasing! Your product will be delivered as soon as possible.</p>
        			<p>Delivery information will be sent to your contact information or email</p>
        			<br>
        		</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

</center>

<script>
	  function ayantoggle(){
        $(".forgot").slideToggle('slow');
    }
    function closeModal(){
    	$('#shoppingCart').modal('hide');
    	$('#paymentMethod').modal('show');
    }
    function closeModal2(){
      if (document.getElementById('cashondel').checked) {
        $('#paymentMethod').modal('hide');
        $('#cod').modal('show');
      }
      else if (document.getElementById('paypal').checked) {
        $('#paymentMethod').modal('hide');
        $('#paypalmodal').modal('show');
      }
    	
    }
    function closeModal3(){
    	$('#cod').modal('hide');
    	$('#paymentSucces').modal('show');
    }
    function closeModal4(){
      $('#paypalmodal').modal('hide');
      $('#paymentSucces').modal('show');
    }

    function userLogin(){
    if ($('#userName').val() == 'admin' || $('#userName').val() == 'administrator') {
      window.location = 'dashboard.html';
    }
    else{
      alert('You are unauthorized to access here');
    }
  }
</script>

<body style ="background-color: white !important">