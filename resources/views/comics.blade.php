
@extends('layouts.layouts')

@section('page-name', 'DC-SHOP') {{--<<<<TITOOLO CASTOMIZATO AL BASE DI PAGINA SPECIFICA --}}
	
@section('main-section')
<section class="comics">
	<div class="container">
		<ul class="comics__items-list">
			@foreach ($comics as $index => $comics)
				<li  class=" comics__item">

				{{-- '/comics/{id}' --}}
					<a href="{{ route('page',['id' => $index]) }}">

						
						<div class="comics__poster">
							<img src="{{ $comics['thumb'] }}" alt="">   {{--<<<<TITOOLO CASTOMIZATO AL BASE DI PAGINA SPECIFICA --}}
							<span>Read more</span>
						</div>
						<h2 class="comics__title">{{ $comics['title'] }}</h2>
					</a>
				</li>
			@endforeach

		</ul>
		<a class="comics__btn" href="">Load More</a>
	</div>
</section>
@endsection