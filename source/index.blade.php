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
        <span class="intro__more-link js-more">
          more
        </span>
      </p>
      <div class="intro__more">
        <p>
          In 2014 I started <a href="http://montag.uy">‹MONTAG›</a>, a small development/design shop. <br>
          Since then, I’ve been working with clients building all sorts of stuff to help them excel at what they do.
        </p>
        <p>
          I specialize in HTML markup and CSS, but I also spend my days working with PHP and JavaScript.
          I enjoy wireframing and designing with Sketch, Illustrator and Photoshop.
        </p>
        <p>
          I like to solve complex problems in simple ways.
          I love <a href="https://www.flickr.com/photos/iign/">photography</a>,
          <a href="http://goodreads.com/iign">reading</a>, bikes, languages and learning new stuff.
        </p>
      </div>
    </div>

    @include('_partials.projects_grid')


@endsection
