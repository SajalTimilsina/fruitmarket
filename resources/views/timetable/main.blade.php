@extends('layouts.app')


@section('content')
<br>
<a href="{{ route('timetables.create') }}" class="btn btn-primary">Create</a>
@foreach($timetables as $departments => $departmenttable)



	<div class="col-lg-12">
		<h1 class="page-header">{{ ucfirst($departments)}}</h1>
	</div>
	
		
	<br>
	<br>
	<table class= "table table-hover">
		<thead>					
			<th>Name</th>
			<th>Email</th>
			<th>sunday</th>
			<th>monday</th>
			<th>tuesday</th>
			<th>wednesday</th>	
			<th>thursday</th>
			<th>friday</th>
			<th>saturday</th>
			<th>friday</th>
			<th>saturday</th>		
			
		</thead>		
			
		<tbody>
				@if($departmenttable->count()>0)
				@foreach($departmenttable as $unknown => $eachuser)
				
					<tr>								
						
						<td>{{ $eachuser->id }}</td>

						<td>{{ $eachuser->department_id }}</td>
						<td>{{ $eachuser->user_id }}</td>
						<td>{{ $eachuser->sunday }}</td>
						<td>{{ $eachuser->monday }}</td>
						<td>{{ $eachuser->tuesday }}</td>
						<td>{{ $eachuser->wednesday }}</td>
						<td>{{ $eachuser->thursday }}</td>
						<td>{{ $eachuser->friday }}</td>
						<td>{{ $eachuser->saturday }}</td>
					</tr>
					
				@endforeach
				<tr> <td colspan="9">{{ $eachuser->note }}</td></tr>
				@else
			
				<tr> 
					<th colspan="5" class="text-center">Employee Datatabse is empty</th>
				</tr>
				@endif
				
		</tbody>						
	</table>
	@endforeach		
@endsection