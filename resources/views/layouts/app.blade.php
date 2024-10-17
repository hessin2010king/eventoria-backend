<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Load assets via Vite -->
    @vite([
        'resources/js/app.js',  // Your main JS file
        'resources/css/app.css', // Your main CSS file
        'node_modules/admin-lte/dist/css/adminlte.min.css',
        'node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css',
        'node_modules/admin-lte/plugins/bootstrap/css/bootstrap.min.css',
        'node_modules/@fullcalendar/core/main.min.css',
        'node_modules/@fullcalendar/daygrid/main.min.css'
    ])

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@400;700&family=Lato:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body class="hold-transition h-auto">
    <div class="wrapper">
        @include('partials.header') 

        <aside class="main-sidebar sidebar-dark-primary elevation-4 h-auto ">
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

    <!-- Load JS dependencies via Vite -->
    @vite([
        'node_modules/admin-lte/plugins/jquery/jquery.min.js',  // jQuery
        'node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js', // Bootstrap
        'node_modules/admin-lte/dist/js/adminlte.min.js',
        'node_modules/@fullcalendar/core/main.min.js', // FullCalendar JS
        'node_modules/@fullcalendar/daygrid/main.min.js', // DayGrid plugin
        'node_modules/@fullcalendar/interaction/main.min.js' // Interaction plugin
    ])

    @include('sweetalert::alert')

    <!-- Popper.js is only needed if you are using Bootstrap tooltips or popovers -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
</body>
</html>
