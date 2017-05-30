<!DOCTYPE html>
<html lang="en">
    <head>
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
@include('scripts')
</html>
