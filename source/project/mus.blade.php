@extends('_layouts.project')
@section('title', 'Mus')
@section('description', 'Web Markup / Mus web app.')
@section('top_link', '← Back')
@section('project_name', 'Mus')

@section('body')

@section('project_name')
Mus
@endsection

@section('project_intro')
<p>
  <em>Mus</em> is a Spotify-like music streaming app with worldwide content,
  focused on Uruguayan
  production.
</p>
<p>
  I worked on the web app version, developing responsive, cross-browser HTML/CSS
  markup that was later integrated into an Angular app.<br>
  Designed by <a href="http://grmn.ws">GRMN Studio</a> and developed by <a href="http://bigcheese.uy">Big Cheese</a>.
</p>
<p>
  View an early protoype here 🔊 <a href="http://mus.montag.uy/">Mus Web Player</a>.
</p>

@endsection

@section('project_body')
<picture class="project__img">
  <source srcset="/uploads/mus/mus-app.webp" type="image/webp">
  <img class="project-detail__img" src="/uploads/mus/mus-app.jpg" srcset="/uploads/mus/mus-app.jpg 1x, /uploads/mus/mus-app@2x.jpg 2x" alt="Mus / web app">
</picture>

<picture class="project__img">
  <source srcset="/uploads/mus/mus-app-2.webp" type="image/webp">
  <img class="project-detail__img" src="/uploads/mus/mus-app-2.jpg" alt="Mus / web app">
</picture>

<picture class="project__img">
  <source srcset="/uploads/mus/mus-app-3.webp" type="image/webp">
  <img class="project-detail__img" src="/uploads/mus/mus-app-3.jpg" alt="Mus / web app">
</picture>
@endsection

@endsection
