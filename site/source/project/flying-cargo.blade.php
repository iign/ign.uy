@extends('_layouts.project')
@section('title', 'Flying Cargo')
@section('description')
  Flying Cargo / Landing page design.
@endsection
@section('top_link', '← Back')
@section('project_name', 'Flying Cargo')

@section('body')

  @section('project_name')
    Flying Cargo
  @endsection

  @section('project_intro')
    <p>
        Flying Cargo is a group of companies providing shipping solutions for leading manufacturers, retailers, importers and  companies worldwide.
    </p>
    <p>
      I worked on a redesigned and simplified landing page for one of their websites.
    </p>
  @endsection

  @section('project_body')
    <img class="project-detail__img" src="/uploads/fc/home-1.jpg"
           srcset="/uploads/fc/home-1.jpg 1x, /uploads/fc/home-1@2x.jpg 2x"
           alt="Flying Cargo / Hero">
    <img class="project-detail__img" src="/uploads/fc/home-2.jpg"
         srcset="/uploads/fc/home-2.jpg 1x, /uploads/fc/home-2@2x.jpg 2x"
         alt="Flying Cargo / Hero">
  @endsection

@endsection
