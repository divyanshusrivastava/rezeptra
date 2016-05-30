@extends('common.default')
@section('content')
<div class="col-md-8 description">
	<h2 class="title">About Us</h2>
	<p>Rezeptra is an innovative, future inclined prescription tool for doctors and patients.  </p>
	<p>	MORE INFO TO BE ADDED</p>
	<ul class="contents"> 
		<li>Beautiful prescriptions</li>
		<li>Proper log of patients</li>
		<li>Alerts for medicine, tests, appointments</li>
		<li>Analytics</li>
	</ul>
	<a class="join" data-toggle="modal" href="#ModalRegister">Join Us</a>
</div>
<div class="col-md-4">
	<div class="form-area">
	  
	      {!! Form::open(array('class'=>'form-signin login-form')) !!}
	        <h2 class="form-signin-heading">Log In</h2>
	        <label for="inputEmail" class="sr-only">Email address</label>
	        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
	        <label for="inputPassword" class="sr-only">Password</label>
	        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
	        <div class="checkbox">
	          <label>
	            <input type="checkbox" value="remember-me"> Remember me
	          </label>
	        </div>
	        <a href="#">forgot your password?</a>
	        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign In" >
	      {!! Form::close() !!}
		  <div class="new_user">Don't have an account? <a data-toggle="modal" href="#ModalRegister">Register Now</a></div>
	  </div>



<!-- Modal -->
<div class="modal fade" id="ModalRegister" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Registration</h4>
    </div>
    <div class="modal-body">

    <!-- FORM -->
      	<form class="form-horizontal" role="form">
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="name">Name:</label>
		      <div class="col-sm-10">
		        <input type="name" class="form-control" id="name" placeholder="Enter name">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="email">E-Mail:</label>
		      <div class="col-sm-10">
		        <input type="email" class="form-control" id="email" placeholder="Enter e-mail">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="number">Phone Number:</label>
		      <div class="col-sm-10">
		        <input type="email" class="form-control" id="email" placeholder="Enter e-mail">
		      </div>
		    </div>
			</form>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#ModalThanks">Submit</button>
    </div>
  </div>
  
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalThanks" role="dialog">
	<div class="modal-dialog">

	  <!-- Modal content-->
	  <div class="modal-content">
	    <div class="modal-header">
	    	<h4>Thanks!</h4>
	    </div>
	    <div class="modal-body">
	    	<p> Our team will get back to you shortly.
	    </div>
	  </div>
	  
	</div>
</div>
@stop