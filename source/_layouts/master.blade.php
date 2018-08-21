<!doctype html>
<html lang="en">
  @include('_partials.head')
  <body>
    @include('_partials.header')

    @yield('body')

    @include('_partials.footer')

    <script src="{{ mix('js/app.js', 'assets/build') }}"></script>


  </body>
</html>
