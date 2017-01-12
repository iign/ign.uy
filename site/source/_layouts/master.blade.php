<!doctype html>
<html lang="en">
  @include('_partials.head')
  <body>
    @include('_partials.header')

    @yield('body')

    @include('_partials.footer')

    <script src="/js/app.js"></script>

  </body>
</html>
