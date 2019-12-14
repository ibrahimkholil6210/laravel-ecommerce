@extends('layouts.master')
@section('title',$user->name." Profile Edit")
@section('content')


<div class="container">
	<div class="row">
		<div class="col-4">
			<ul class="nav flex-column side-nav">
			  <li class="nav-item f-small">
			    {{ 'Hello, '.$user->name }}
			  </li>

			  <li class="nav-item f-large">
			    <a class="nav-link active fl" href="#">Manage My Profile</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Profile</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Address Book</a>
			  </li>

			  <li class="nav-item f-large">
			    <a class="nav-link active fl" href="#">Manage Order</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">My Return</a>
			  </li>
			</ul>
		</div>
		<div class="col-8">
			<div class="card profile">
				<div class="card-header">
					<h6>Profile Edit</h6>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection