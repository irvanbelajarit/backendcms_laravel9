<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>

            {{ config('app.name')  }} - @yield('title')

        </title>
        <link href="{{ asset('template/css/admin_styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        @include('layouts.admin_nav')

        <div id="layoutSidenav">
            @include('layouts.admin_sidebar')
            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>
               @include('layouts.admin_footer')
            </div>
        </div>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"
      ></script>
      <script src="{{ asset('template/js/admin_scripts.js') }}"></script>
      <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
        crossorigin="anonymous"
      ></script>

      <script
        src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"
        crossorigin="anonymous"
      ></script>

    </body>


</html>
