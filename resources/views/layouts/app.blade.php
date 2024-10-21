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
    'node_modules/admin-lte/dist/css/adminlte.min.css', // Use this path
    ])
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.15/main.min.css" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auUjS6Gm2dqgo1pbWVkp1qI4FLakibk04wwxk" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.5.1/fabric.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/konva/8.3.5/konva.min.js"></script>
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

    <!-- Vite will load JS dependencies -->
     <!-- jQuery via CDN -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

     <!-- Bootstrap Bundle (with Popper) via CDN -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-2T4cSLfn+hrP1mI8A+zbNe4sNHY9ksHgTpXh7o6SMvsD5Fhb3M3MTP0Y5cBIS4Zq" crossorigin="anonymous"></script>
 
     <!-- AdminLTE JS via CDN -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>
 
     <!-- FullCalendar JS via CDN -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.15/main.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.15/locales-all.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.15/daygrid/main.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.15/interaction/main.min.js"></script>
 

    @include('sweetalert::alert')

    <!-- Popper.js is only needed if you are using Bootstrap tooltips or popovers -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <!-- Note: The Bootstrap bundle already includes Popper.js -->
</body>
</html>
