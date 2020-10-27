<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes.head')
<body>
    <div class="container-fluid w-100" role="main">
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
