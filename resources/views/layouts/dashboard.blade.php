<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
@include('includes.head')
<body>
    @include('includes.header')
    <main class="u-main" role="main">
        @include('includes.sidebar')
        <div class="u-content">
            @yield('content')
        </div>
    </main>
    @include('includes.footer')
    @yield('outside-main')
</body>
</html>
