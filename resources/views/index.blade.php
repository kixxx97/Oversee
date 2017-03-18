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
	    <li><a class="active" href="#">Home</a></li>
            <li><a href="{{ url('/shop') }}">Shop</a></li>
	    <li><a href="#">About us</a></li>
	    <li><a href="#">Contact Us</a></li>
	  </ul>
	</div>
</div>

<div class="container-fluid">
	<img class="img-responsive" src="assets/img/coca_cola_banner.png">
	<br><br>
	<div class="container">
		<h3>The Coca-Cola Company</h3>
		<br><br>
		<p class="text-justify companytext">Coca-Cola is the most popular and biggest-selling soft drink in history, as well as one of the most recognizable brands in the world.

Created in 1886 in Atlanta, Georgia, by Dr. John S. Pemberton, Coca-Cola was first offered as a fountain beverage at Jacob's Pharmacy by mixing Coca-Colasyrup with carbonated water.

Coca-Cola was patented in 1887, registered as a trademark in 1893 and by 1895 it was being sold in every state and territory in the United States.

In 1899, The Coca-Cola Company began franchised bottling operations in the United States and in 1906 bottling operations for Coca-Cola began to expand internationally.</p>
	</div>

	<div class="container">
		<br><br><br>
		<h3>Featured Items</h3>
		<br><br><br>
		
		<div class="col-md-4"><img class="coke-product" src="assets/img/coke_classic.png"><br><span class="itemName"><br>Coke Classic</span>
		<br>Price: P99.75 per pc
		</div>

		<div class="col-md-4"><img class="coke-product" src="assets/img/coke_zero.png"><br><span class="itemName"><br>Coke Zero</span>
		<br>Price: P99.75 per pc
		</div>

		<div class="col-md-4"><img class="coke-product" src="assets/img/sprite-soda-can.jpg"><br><span class="itemName"><br>Sprite</span>
		<br>Price: P99.75 per pc
		</div>

	</div>
	

	<br><br><br><hr><br>

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
        
        <br><br><br>

	<div class="container">
    <div class="row">
	<div class="bs-example">
    
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
                    <form method="post" action = "{{ url('/create') }}"id="logFrm" class="log-frm" name="logFrm"> 
                    <ul>           
                        {{csrf_field()}}
                        <li>Username</li>
                        <li> <input type="text" placeholder="Username" id="userName" name="userName" class="form-control" onfocus="checkNullProf();"></li>
                        <li>Password</li>
                        <li><input type="password" placeholder="Password" id="password" name="password" class="form-control" onfocus="checkNullProf();"></li>                                                
                        <li><br/><input type="submit" id="logBtn" class="btn btn-default"></li>
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
                                        <li>Email Adress</li>
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
                             <form method="post" id="userRegisterFrm" class="log-frm" name="userRegisterFrm" action="index.php">  
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
                           <br> <li><button type="submit" name="userRegBtn" class="btn btn-default">Sign up Now</button></li>
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

	</div>
	</div>
	</div>

</div>

</center>

<script>
    function ayantoggle(){
    $(".forgot").slideToggle('slow');
  }

//  function userLogin(){
//  	if ($('#userName').val() == 'admin' || $('#userName').val() == 'administrator') {
//      window.location = 'dashboard.html';
//    }
//    else{
//      alert('You are unauthorized to access here');
//    }
//  }
</script>

</body>