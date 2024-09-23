<!DOCTYPE html>
<html lang="en">

<head>
    <title>SMS - St. Martha Skills Training and Assesment Center</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ config('app.url') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    @include('layouts.style')
</head>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->

        @include('layouts.sidebar')

	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
        @include('layouts.header')
	<!-- [ Header ] end -->
	
	
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>

@include('layouts.script')
</body>

</html>
