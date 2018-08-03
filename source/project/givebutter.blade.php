@extends('_layouts.project')
@section('title', 'Givebutter')
@section('description', 'Web Markup / Givebutter website.')
@section('top_link', '← Back')
@section('project_name', 'Givebutter')

@section('body')

  @section('project_name')
    Givebutter
  @endsection

  @section('project_intro')
    <p>
        Givebutter is a mission-driven company that believes giving should be a part of everyone’s lives.
    </p>
    <p>
        They approached looking for someone to rebuild their website's homepage
        from in-house built Sketch designs.
    </p>
    <p>
        I worked on the homepage, developing cross-browser web markup and intuitive JavaScript components.<br>
        Their codebase was already using the fabulous <a href="https://getuikit.com/">UIkit</a>, so I worked on top of it to
        make sure their design shined through.
    </p>
    <p>
        Visit their website: <a href="http://mus.montag.uy/">Givebutter</a>.
    </p>

  @endsection

  @section('project_body')
    <img class="project-detail__img" src="/uploads/givebutter-1.jpg"
           srcset="/uploads/givebutter-1.jpg 1x, /uploads/givebutter-1@2x.jpg 2x"
           alt="Givebutter / website">
  @endsection

@endsection
