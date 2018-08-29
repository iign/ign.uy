@extends('_layouts.master')
@section('title', 'Nacho Toledo')
@section('description', 'I’m a front-end designer and developer, focused on simple solutions and intuitive interfaces.')
@section('top_link', 'Nacho Toledo')

@section('body')
    <div class="hallo">
        ...
    </div>

    <div class="intro">
      <p>
        I’m a front-end designer &amp; developer, focused on simple solutions and intuitive interfaces.
        I specialize in HTML, CSS &amp; UX design, but I also spend my days working with PHP and JavaScript.
      </p>
      <p>
        I like to solve complex problems in simple ways.
        I love <a href="https://www.flickr.com/photos/iign/">photography</a>,
        <a href="http://goodreads.com/iign">reading</a>, biking, languages and learning new stuff.
      </p>
    </div>

    @include('_partials.projects_grid')

@endsection
