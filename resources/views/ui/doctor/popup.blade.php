<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" media="all" />
</head>
<body>
<div class="container">
	<h3>Patient Name: {{$user->name}}</h3>
	<h4>Diagnosis
	<small></small></h4>
	<p>{{$diag->diagnosis}}</p>
	<hr>
	<table class="table ">
		<tr>
			<th>Type</th>
			<th>Name</th>
			<th>Dosage</th>
		</tr>
		<tbody>
			
				@foreach($data as $d)
				<tr>
					<td>{{$d[0]}}</td>
					<td>{{$d[1]}}</td>
					<td>{{$d[2]}}</td>
						</tr>
				@endforeach
		
		</tbody>
	</table>
	</div>
</body>
</html>