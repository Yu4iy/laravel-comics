
@extends('layouts.layouts')

@section('page-name', 'DC-SHOP')
	
@section('main-section')
<section class="comics">
	<div class="container">
		<ul class="comics__items-list">
			@foreach ($comics as $comics)
				<li  class=" comics__item">
					<div class="comics__poster">
						<img src="{{ $comics['thumb'] }}" alt="">
					</div>
					<h2 class="comics__title">{{ $comics['title'] }}</h2>
				</li>
			@endforeach

		</ul>
		<a class="comics__btn" href="">Load More</a>
	</div>
</section>
@endsection