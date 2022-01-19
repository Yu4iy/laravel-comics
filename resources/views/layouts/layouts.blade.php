<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Comics</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
	{{-- HEADER  --}}
	@include('partials.header')
	
	{{-- MAIN  --}}
		<main class="test">
			@yield('comics')
			@yield('news')
		</main>
	
    
    {{-- FOOTER  --}}
	@include('partials.footer')
    </body>
</html>
