<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    @include('partials.style')
  </head>
  <body>
    {{-- Navigation --}}
    @include('partials.nav')


    {{-- Navigation End --}}

    {{-- Category --}}
    @include('partials.category')
    {{-- Category End --}}
    
    <main class="py-4">
        @yield('content')
    </main>


    {{-- Product ENd --}}
    {{-- Footer --}}

    @include('partials.footer')
    {{-- Footer End --}}
  </body>
</html>