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
        Mus is a Spotify-like music streaming app with worldwide content, focused on local 
        production.
    </p>
    <p>
      I worked on the web app version, developing cross-browser web markup.<br>
      Designed by <a href="http://grmn.ws">GRMN</a> and developed by <a href="http://bigcheese.uy">Big Cheese</a>. <br>
      View the <a href="http://mus.montag.uy/">prototype</a>.
    </p>
  
  @endsection

  @section('project_body')
    <img class="project-detail__img" src="/uploads/mus/mus-app.png"
           srcset="/uploads/mus/mus-app.png 1x, /uploads/mus/mus-app@2x.png 2x"
           alt="Mus / web app">
  @endsection

@endsection
