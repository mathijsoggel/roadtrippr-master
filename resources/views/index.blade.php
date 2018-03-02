@extends('layout')

@section('content')

	<header>
		<div class="container"><h3>Roadtrippr</h3></div>
	</header>

<div class="container">
	<div class="col-8 offset-2">
		<div class="homescreen">
			<div class="row">
				<div class="col">
					<div class="card bg-light mb-3" style="max-width: 18rem;">
					  <div class="card-header"><i class="fas fa-user-plus"></i> Add new user</div>
					  <div class="card-body">
					    <p class="card-text"><a class="btn btn-dark" href="/users/add">Link</a></p>
					  </div>
					</div>
				</div>

				<div class="col">
					<div class="card bg-light mb-3" style="max-width: 18rem;">
					  <div class="card-header"><i class="far fa-map"></i> Ga naar route planner</div>
					  <div class="card-body">
					    <p class="card-text"><a class="btn btn-dark" href="/planner">Link</a></p>
					  </div>
					</div>
				</div>

		</div>
	</div>
</div>

	<footer>
		&copy; Allard Oelen & Mathijs Oggel 2018
	</footer>

@stop