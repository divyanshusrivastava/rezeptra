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
    <textarea name="diag" class="form-control" id="diag">{{$s->diag or ''}}</textarea>
  </div>
  {{-- Medicine --}}
  <span id="med">
  <div class="form-group">
  <label for= "med" class="text">Medicine</label>
  <select class="form-control" id="m">
  	<option>Med1</option>
  	<option>Med2</option>
  </select>
  </div>
  <div class="form-group">
    <label for= "dosage" class="text">Dosage</label>
    	<input class="dosage form-control" name="dosage" id="dosage">
  </div>
  <div class="form-group">
  	<label for="dur">Duration</label>
  	<select class="form-control" name="dur" id="dur">
  		<option>Daily</option>
  		<option>Every 4 Hours</option>
  		<option>Every 8 Hours</option>
  	</select>
  </div>
  {{--  --}}
  <button type="button" class="btn btn-success btn-sm" id="addmore"><span class="glyphicon glyphicon-plus"></span> </button>
  </span>
  {{--  --}}

  <button type="submit" class="btn btn-default">Submit</button>
	{!! Form::close() !!}
</div>
<div class="col-md-4">
<h4 class="text">Patient Queue</h4>


	<table class="table">
		@foreach($patient as $p)
			<tr>
				<td><a href="#" class="text" style="font-size:1.2em;">  {{$p->name}} </a> </td>
				<td>	<a href="#" id="view" data = "{{$p->id}}"class="pat btn btn-success"> View</a> </td>
			</tr>
		@endforeach
	</table>

	
</div>
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
	      $('form').show();
	    }
			});
	
  });
		});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#addmore').click(function(){
			$('#med').append('<hr><div class="form-group"><label for= "med" class="text">Medicine</label><select class="form-control" id="m"><option>Med1</option><option>Med2</option></select></div><div class="form-group"><label for= "dosage" class="text">Dosage</label><input class="dosage form-control" name="dosage" id="dosage"></div><div class="form-group"><label for="dur">Duration</label><select class="form-control" name="dur" id="dur"><option>Daily</option><option>Every 4 Hours</option><option>Every 8 Hours</option><select></div>'
				);
		});
	});
</script>
@stop