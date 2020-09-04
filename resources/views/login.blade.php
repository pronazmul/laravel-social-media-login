@extends('layout.app')
@section('content')

<div class="container">
	<div style="height: 100vh;" class="row d-flex justify-content-center align-items-center">
		<div class="col-md-6 card shadow">
			<div class="card-header text-center">
				<h1>Social Media Login</h1>
			</div>
			<div class="card-body p-5 mx-auto">

					 <a type="button" class=" btn btn-outline-success btn-lg" href="{{url('/gitLogin')}}">Continue with GitHub</a>
	
			</div>
			
		</div>
	</div>
</div>

@endsection
@section('script')

@endsection
