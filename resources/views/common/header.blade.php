<header class="head">
		<div class="container header">
			<div class="row">
				<div class="col-md-8 col-sm-6">
					<div class="logo">
						<a href="#"  style="padding: 22px; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"><img src="{{asset('images/logo.png')}}" alt="logo-image" width="280px" height="60px" border="10px"></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="menu">

						<ul>
							@if(Auth::check())
								<!-- <li>Welcome {{Auth::user()->name}}</li> -->
								<li><a href="{{url('/logout')}}">Logout</a></li>
							@endif
							<li><a data-toggle="modal" href="#myModal">Contact Us</a></li>

							<li></li>
						</ul>
						<style type="text/css">
							.text{
								color: white;
							}
						</style>


					</div>
				</div>
			</div>
		</div>

		  <!-- Modal -->
		  <div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog">
		    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">Contact Us</h4>
		        </div>
		        <div class="modal-body">
		        @if(!Auth::check())
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
  							<label class="control-label col-sm-2" for="comment">Comment:</label>
  							<div class="col-sm-10">
  								<textarea class="form-control" rows="2" id="comment"></textarea>
  							</div>
						</div>
  					</form>
  					@endif
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
		        </div>
		      </div>
		      
		    </div>
		  </div>
	</header>