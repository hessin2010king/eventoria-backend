<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Load assets via Vite -->
    @vite([
        'resources/js/app.js',
        'resources/css/app.css',
        'resources/js/bootstrap.bundle.min.js',
    ])

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@400;700&family=Lato:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/fabric.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/konva/8.3.5/konva.min.js"></script>
</head>

<body class="hold-transition h-auto">
    <div class="wrapper">
        @include('partials.header')

        <aside class="main-sidebar sidebar-dark-primary elevation-4 h-auto">
            @include('partials.sidebar')
        </aside>

        <div class="content-wrapper p-4 h-auto">
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>

        @include('partials.footer')
    </div>

    <!-- jQuery via CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- AdminLTE JS via CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>

    <!-- FullCalendar JS via CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.15/main.min.js"></script>
    <script src="{{ asset('js/locales-all.global.min.js') }}"></script>
    <script src="{{ asset('js/daygrid/index.global.min.js') }}"></script>
    <script src="{{ asset('js/interaction/index.global.min.js') }}"></script>

    @include('sweetalert::alert')

    <!-- Popper.js is only needed if you are using Bootstrap tooltips or popovers -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
</body>

</html>
