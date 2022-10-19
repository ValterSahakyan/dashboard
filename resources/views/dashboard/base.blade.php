<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Denovo Admin">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Denovo</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/denovo-favicon.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/denovo-favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/denovo-favicon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/denovo-favicon.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/denovo-favicon.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/denovo-favicon.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/denovo-favicon.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/denovo-favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/denovo-favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/denovo-favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/denovo-favicon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/denovo-favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/denovo-favicon.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/denovo-favicon.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Icons-->
    <link href="{{ asset('css/free.min.css') }}" rel="stylesheet"> <!-- icons -->
    <!-- Main styles for this application-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main_style.css') }}" rel="stylesheet">
      @toastr_css
    @yield('css')

    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>

    <link href="{{ asset('css/coreui-chartjs.css') }}" rel="stylesheet">
  </head>

  <body class="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">

      @include('dashboard.shared.nav-builder')

      @include('dashboard.shared.header')

      <div class="c-body">

        <main class="c-main">

          @yield('content')

        </main>
        @include('dashboard.shared.footer')
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('js/coreui-utils.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.17.1/full-all/ckeditor.js"></script>

    @toastr_js
    @toastr_render
    @yield('javascript')
  </body>
</html>
