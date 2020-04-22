<head>
  @if ($page->production)
  <script>
    (function(e, t, n, i, s, a, c) {
      e[n] = e[n] || function() {
        (e[n].q = e[n].q || []).push(arguments)
      };
      a = t.createElement(i);
      c = t.getElementsByTagName(i)[0];
      a.async = true;
      a.src = s;
      c.parentNode.insertBefore(a, c)
    })(window, document, "galite", "script", "https://cdn.jsdelivr.net/npm/ga-lite@2/dist/ga-lite.min.js");

    galite('create', 'UA-7613436-1', 'auto');
    galite('send', 'pageview');
  </script>

  @endif
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>@yield('title')</title>
  <meta name="description" content="@yield('description')">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel=icon href=favicon.svg sizes="any" type="image/svg+xml">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#000000">
  <meta name="msapplication-TileColor" content="#000000">
  <meta name="theme-color" content="#000000">
  <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
  <script>
    function sayHi() {
      if (!document.querySelector('.hallo')) {
        return
      }
      let hallo = document.querySelector('.hallo')
      let items = ['Hallo', 'Hola', '👋', 'Hi']
      let item = items[Math.floor(Math.random() * items.length)]
      hallo.innerHTML = item
    }

    document.addEventListener('DOMContentLoaded', function(event) {
      sayHi()
    })
  </script>
</head>
