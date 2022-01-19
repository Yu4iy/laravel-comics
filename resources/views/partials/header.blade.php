<header class="header">
	<div class="header__container container">
		<img class="header__logo" src=" {{ asset('images/dc-logo.png') }} " alt="">

		<ul>
			<li>
				<a   href="{{ route('comics') }}"
				@if (Request::route()->getName() === 'comics') class= "active" @endif 
				>
					COMICS
				</a>
			</li>

			<li>
				<a  href="{{ route('news') }}"
				@if ( Request::route()->getName() === 'news') class= "active" @endif
				>
					NEWS
				</a>
			</li>
		</ul>

	</div>
	@dump( Request::route()->getName())
</header>