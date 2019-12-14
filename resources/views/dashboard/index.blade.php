@extends('layouts.master')
@section('title',$user->name)
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
		<div class="col-4">
			<div class="card profile">
				<div class="card-header">
					<h5>Personal Profile</h5>
					<a href="{{ route('dashboard.edit',$user->slug) }}">Edit</a>
				</div>
				<div class="card-body">
					<p>{{ $user->name }}</p>
					<p>{{ $user->email }}</p>
					<p>{{ $user->phone_number }}</p>
				</div>
			</div>
		</div>
		<div class="col-4">
			<div class="card profile">
				<div class="card-header">
					<h5>Address Information</h5>
					<a href="{{ route('dashboard.edit',$user->slug) }}">Edit</a>
				</div>
				<div class="card-body">
					<p>{{ $user->shipping_address }}</p>
					<p>{{ $user->country->name }}</p>
					<p>{{ $user->division->name }}</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection