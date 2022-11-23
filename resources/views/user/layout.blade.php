<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('user.partials.head', ['title' => $title, 'description' => $description, 'logo' => $logo])
    <!-- Scripts -->
    @yield('styles')
</head>

<body>
    <div class="container">
        <!-- Header -->
        @include('user.partials.header', ['logo' => $logo])
        <!-- Content -->
        @yield('content')
    </div>
    <!-- Footer -->
    @include('user.partials.footer')
    <!-- Scripts -->
    <a href="https://api.whatsapp.com/send?phone=51928307609"
        class="btn-whatsapp-float" target="_blank">
        <img src="{{ asset('Assets/img/whatsapp.png') }}" class="filter-invert" loading="lazy">
    </a>
    @include('user.partials.script')
    @yield('scripts')
    
</body>

</html>
