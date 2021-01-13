<head>
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