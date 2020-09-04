@extends('layout.app')
@section('content')

<div class="container">
	<div style="height: 100vh;" class="row d-flex justify-content-center align-items-center">
		<div class="col-md-6 card">
			<div class="card-header text-center">
				<h1>User Profile</h1>
			</div>
			<div class="card-body">
				<img height="200" width="200" class="rounded rounded-circle shadow mx-auto d-block my-4" src="{{Session::get('avatar')}}">
				<table class="table table-striped">
					<tr>
						<td>Name</td>
						<td>:</td>
						<td>{{Session::get('name')}}</td>
					</tr>
					<tr>
						<td>Eamil</td>
						<td>:</td>
						<td>{{Session::get('email')}}</td>
					</tr>
					<tr>
						<td>Nick Name</td>
						<td>:</td>
						<td>{{Session::get('nickName')}}</td>
					</tr>
					
				</table>
			</div>
			<div class="card-footer text-center">
				<a class="btn btn-outline-primary" href="{{url('/logout')}}">Log Out</a>
			</div>
		</div>
	</div>
</div>

@endsection
@section('script')

@endsection

