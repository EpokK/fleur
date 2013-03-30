@extends('layouts.master')

@section('content')

<style type="text/css">
	.navbar-wrapper {
		margin-bottom: 0;
		position: relative;
	}

	.container {
		display: block;
	}

	.bouquet {

	}

	.bouquet .photo {
		border: 1px solid #CCC;
		padding: 5px;
		background-color: white;
	}

	.bouquet .nom {
		font-weight: bold;
		text-align: center;
		font-size: 20px;
		margin-top: 5px;
		margin-bottom: 5px;
		color: #B200FF;
	}

	.bouquet .prix {
		font-style: italic;
		text-align: right;
	}
</style>

<div class="container">
	<h2>{{Bouquet::count()}} bouquets</h2>

	<div class="row-fluid">
		@if($bouquets)
			@foreach($bouquets as $bouquet)
				<div class="span3 well bouquet">
					<div class="photo"><img src="{{ URL::to('img') }}/{{ $bouquet->photo }}" alt=""></div>
	        		<div class="nom">{{ $bouquet->nom }}</div>
	        		<div class="prix">{{ $bouquet->prix }} EUR</div>
	       		</div>
			@endforeach
		@endif
	</div>
</div>

@stop