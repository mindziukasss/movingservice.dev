<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        @include('css')
        @include('meta')
    </head>
<body>
    @include('header')

<div class="container">

    <h1>@yield('title')</h1>
    @yield('content')

</div>
    @include('footer')
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>

@yield('scripts')
