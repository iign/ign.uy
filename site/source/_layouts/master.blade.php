<!doctype html>
<html lang="en">
  @include('_partials.head')
  <body>
    @include('_partials.header')

    @yield('body')

    @include('_partials.footer')

    <script src="/js/app.js"></script>
    <?php if ($config.production): ?>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-7613436-1', 'auto');
          ga('send', 'pageview');

        </script>
    <?php endif ?>

  </body>
</html>
