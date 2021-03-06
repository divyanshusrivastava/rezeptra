@extends('common.default')
@section('content')
<div class="col-md-8  description">

		<table class="table borderless text">
			<tr>
				<td>Name</td>
				<td id="name"></td>
			</tr>
			<tr>
				<td>Age</td>
				<td id="age"></td>	
			</tr>
			<tr>
				<td>Complaint</td>
				<td id="complaint"></td>
			</tr>
			<tr>
				<td>Referred By</td>
				<td id="ref_by"></td>
			</tr>
					</table>
	
	{!! Form::open(array('class'=>'form','style'=>'display:none;','id'=>'form')) !!}
	  <div class="form-group">
    	<label for="diag" class="text">Diagnosis</label>
    	<input type="hidden" name="user_id" value="" id="user_id">
    	<textarea name="diag" class="form-control" id="diag">{{$s->diag or ''}}</textarea>
  	  </div>
  
  {{-- Medicine --}}
  	<span id="med">

  		<div class="form-group">
  			<div class="col-sm-2 label">
  			<label for= "med" class="text">Type</label>
  			<select class="form-control" id="m" name="med_o[]">
  				<option value="cap">Cap</option>
  				<option value="tab">Tab</option>
  				<option value="syr">Syr</option>
  				<option value="inj">Inj</option>
  				<option value="path">Path</option>
  				<option value="oth">Oth</option>
  			</select>
  			</div>
  		</div>
  
  		<div class="form-group">
  			<div class="col-sm-8 label">
    		<label for= "dosage" class="text">Name</label>
    		<input class="dosage form-control" name="dosage[]" id="dosage">
  			</div>
  		</div>
  
  		<div class="form-group">
  			<div class="col-sm-2 label">
  			<label for="dur">Dosage</label>
  			<select class="form-control" name="dur[]" id="dur">
  				<option  value="q1d">Q1D</option>
  				<option value="bid">BID</option>
  				<option value="qds">QDS</option>
  				<option value="ud">UD</option>
  			</select>
  			</div>
  		</div>
  {{--  --}}
  </span>

  <button type="button" class="btn btn-success btn-sm" id="addmore"><span class="glyphicon glyphicon-plus"></span> Add Record</button>
  
  {{--  --}}

  <button type="submit" class="btn btn-default pull-right">Submit</button>
	{!! Form::close() !!}
</div>
<div class="col-md-4">
<h4 class="text">Patient Queue</h4>


	<table class="table">
		@foreach($patient as $p)
			<tr>
				<td><a href="#" class="text" style="font-size:1.2em;">  {{$p->name}} </a> </td>
				<td>	
				@if($p->type=="new")
				<a href="#" id="view" data = "{{$p->id}}" class="pat btn btn-success"> View</a> </td>
				@else($p->type=="old")
				<a href="#" class=" btn btn-primary print" data="{{$p->id}}"> Print</a> </td>
				@endif
			</tr>
		@endforeach
	</table>

	
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.print').click(function () {
			// body...
			var id= $(this).attr('data');
			var url = "{{url('dr/popup')}}"+"/"+id;
			// alert(url);
			window.open(url);
			
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(
		function(){
			$('.pat').click(function(){
				var id= $(this).attr('data');
				// alert(id);
						var url = "{{url('patient')}}"+"/"+id;
				 $.ajax({
			    url:url,  
	    success:function(data) {
	      $('#name').text(data.name);
	      $('#age').text(data.age);
	      $('#ref_by').text(data.referred_by);
	      $('#complaint').text(data.complaint);
	      $('#user_id').val(id);
	      $('form').show();
	    }
			});
	
  });
		});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#addmore').click(function(){
			$('#med').append('<div class="form-group"> 			<div class="col-sm-2 label"> 	<select class="form-control" id="m" name="med_o[]"><option>Cap</option>  				<option>Tab</option>  				<option>Syr</option>  				<option>Inj</option>  				<option>Path</option>  				<option>Oth</option>  			</select>  			</div>  		</div>  		<div class="form-group">  			<div class="col-sm-8 label">    		<input class="dosage form-control" name="dosage[]" id="dosage">  			</div>  		</div>    		<div class="form-group">  			<div class="col-sm-2 label"><select class="form-control" name="dur[]" id="dur">  				<option>Q1D</option>  				<option>BID</option> 				<option>QDS</option>  				<option>UD</option>  			</select>  			</div>  		</div>'
				);
		});
	});
</script>
@stop