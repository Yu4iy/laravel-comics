<header class="header">
	<div class="header__container container">
		<img class="header__logo" src=" {{ asset('images/dc-logo.png') }} " alt="">
		<a class="header__link" href="{{ route('comics') }}"
		{{-- @if (Request::route()->getName() === 'comics') class="header__link-active" @endif  --}}
		>
			COMICS
		</a>
		<a class="header__link" href="{{ route('news') }}">NEWS</a>
	</div>
</header>