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
        I’m a designer-developer mix, focused on simple and beautiful solutions.
      </p>
      <p>
        I design and build effective websites and digital products, working seamlessly
        with designers and developers.
      </p>
    </div>

    @include('_partials.projects_grid')

@endsection
