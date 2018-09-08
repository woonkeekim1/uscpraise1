@extends('app')
@section('cssExtend')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<title>Power of Praise Church > Help List</title>
@endsection
@section('css')
.login{
	width: 80%;
	margin: 0 auto;
}
@endsection
@section('content')
<div class="container">
	<div class="bodyWrapper">
		<div style="min-height:500px;display:flex; padding: 20px 0px;">
			<div class="login">
				<div class="worshipHeader">Help List</div>
				<table class="table table-bordered" style="margin-top: 20px;">
					<tr style="text-align:center;">
						<th style="width: 80px;">Name</th>
						<th>Email</th>
						<th>Pick up</th>
						<th>Bank Account</th>
						<th>Phone</th>
						<th>Else</th>
						<th>Detail</th>
						<!--
						<th>Assigned To</th>
						<th>Status</th>
						-->
						<th>Modified Date</th>
					</tr>
					@foreach ($helps as $help)
						<tr style="text-align:center;">
							<td>{{ $help->name}}</td>
							<td>{{$help->email}}</td>
							<td>
								@if($help->pickup)
									<input type='checkbox' checked disabled>
								@else
									<input type='checkbox' disabled>
								@endif
							</td>
							<td>
								@if($help->bank)
									<input type='checkbox' checked disabled>
								@else
									<input type='checkbox' disabled>
								@endif
							</td>
							<td>
								@if($help->phone)
									<input type='checkbox' checked disabled>
								@else
									<input type='checkbox' disabled>
								@endif
							</td>
							<td>
								@if($help->else)
									<input type='checkbox' checked disabled>
								@else
									<input type='checkbox' disabled>
								@endif
							</td>
							<td>
								{{$help->elseText}}
							</td>
							<!--
							<td>{{$help->assignedTo}}</td>
							<td>{{$help->status}}</td>
							-->
							<td>
								{!! $help->updated_at->year !!}.{!! str_pad($help->updated_at->month, 2, 0, STR_PAD_LEFT)!!}.{!!str_pad($help->updated_at->day, 2, 0, STR_PAD_LEFT)!!}
							</td>
						</tr>
					@endforeach
				</table>
				{!! $helps->render() !!}
			</div>
		</div>
	</div>
</div>
@endsection
