@extends('layouts.app')


@section('content')
<br>
<form action="{{ route('timetables.store')}}">
<input type="submit" value="Submit" method="POST">
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
						
						<td contenteditable="true">{{ $eachuser->id }}</td>

						<td contenteditable="true">{{ $eachuser->department_id }}</td>
						<td contenteditable="true">{{ $eachuser->user_id }}</td>
						<td contenteditable="true"><input type="text" name="{{$eachuser->user_id}}_sunday" value= {{ $eachuser->sunday }} class="border-none"></td>
						<td contenteditable="true"><input type="text" name="{{$eachuser->user_id}}monday" value={{ $eachuser->monday }} class="border-none"></td>
						<td contenteditable="true"><input type="text" name="{{$eachuser->user_id}}_tuesday" value={{ $eachuser->tuesday }} class="border-none"></td>
						<td contenteditable="true"><input type="text" name="{{$eachuser->user_id}}_wednesday" value={{ $eachuser->wednesday }} class="border-none"></td>
						<td contenteditable="true"><input type="text" name="{{$eachuser->user_id}}_thursday" value={{ $eachuser->thursday }} class="border-none"></td>
						<td contenteditable="true"><input type="text" name="{{$eachuser->user_id}}_friday" value={{ $eachuser->friday }} class="border-none"></td>
						<td contenteditable="true"><input type="text" name="{{$eachuser->user_id}}_saturday" value={{ $eachuser->saturday }} class="border-none"></td>

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
    </form>		
@endsection
