<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    @yield('style')
    @livewireStyles
  </head>
  <body>
    <div class="container-fluid">
        @yield('content')
    </div>
    @yield('script')
    @livewireScripts
    <script src="/js/sweetalert2-11.js"></script>
    <x-livewire-alert::scripts />
    <script src="/js/bootstrap.bundle.min.js"></script>
  </body>
</html>