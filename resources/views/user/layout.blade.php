

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('user.partials.head', ['title' => $title, 'description' => $description, 'logo' => $logo])
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
    @include('user.partials.script')

</body>

</html>
