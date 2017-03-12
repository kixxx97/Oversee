@extends('layouts.master')

@section('content')


<nav class="navbar navbar-default">
  <div class="container-fluid">
  <ul class="nav navbar-nav pull-left">
  	<li><span class="numberSaTaasBackground"></span></li>
  	<li><span class="numberSaTaas"><span class="fa fa-phone-square"></span>&nbsp +639234567890</span></li>
  </ul>

    <ul class="nav navbar-nav pull-right gamaylang">      
      <li><a href="#"><img class="socialIcons" src="assets/img/fb.png"></a></li>
      <li><a href="#"><img class="socialIcons" src="assets/img/twitter.png"></a></li>
      <li><a href="#"><img class="socialIcons" src="assets/img/googleplus.png"></a></li>
      <li><a href="#"><img class="socialIcons" src="assets/img/pinterest.png"></a></li>
      <li><a href="#"><img class="socialIcons" src="assets/img/linkedin.png"></a></li>
      <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="signin pull-right">Sign In</span></a></li>
      <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="slash pull-right">/</span></a></li>
      <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="register pull-right">Register</span></a></li>
    </ul>
  </div>
</nav>
<br><br>
<center>
<h1 class="company">Company Name</h1>
<br><br><br>

<div class="container">
	<div class="navbar">
	  <ul class="nav nav-justified" id="myNav">
	    <li><a class="active" href="index.html">Home</a></li>
	    <li><a href="shop.html">Shop</a></li>
	    <li><a href="#">About us</a></li>
	    <li><a href="#">Contact Us</a></li>
	  </ul>
	</div>
</div>

<div class="container-fluid">
	<img class="img-responsive" src="assets/img/banner.png">
	<br>
	<div class="container">
		<h3>Company Name Manufcaturing Company</h3>
		<br><br>
		<p class="text-justify companytext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur.</p>
	</div>

	<div class="container">
		<br><br><br>
		<h3>Featured Items</h3>
		<br>
		
		<div class="col-md-4"><img src="assets/img/imgdummy.png"><br><span class="itemName"><br>Small Product</span>
		<br>Price: P99.75 per pc
		</div>

		<div class="col-md-4"><img src="assets/img/imgdummy.png"><br><span class="itemName"><br>Medium Product</span>
		<br>Price: P99.75 per pc
		</div>

		<div class="col-md-4"><img src="assets/img/imgdummy.png"><br><span class="itemName"><br>Large Product</span>
		<br>Price: P99.75 per pc
		</div>

	</div>
	

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

  function userLogin(){
  	if ($('#userName').val() == 'admin' || $('#userName').val() == 'administrator') {
      window.location = 'dashboard.html';
    }
    else{
      alert('You are unauthorized to access here');
    }
  }
</script>

@endsection