@extends('_layouts.project')
@section('title', 'Proyecto Nahual')
@section('description')
    Logo design / Proyecto Nahual is an volunteer-driven initiative to promote the social and work inclusion
    of young people through software testing.
@endsection
@section('top_link', '← Back')
@section('project_name', 'Proyecto Nahual')

@section('body')

  @section('project_name')
    Proyecto Nahual
  @endsection

  @section('project_intro')
    <p>
        Proyecto Nahual is an volunteer-driven initiative to promote the social and work inclusion
        of young people through software testing workshops.
    </p>
  @endsection

  @section('project_body')
    <img class="project-detail__img" src="/uploads/nahual/nahual.png"
           srcset="/uploads/nahual/nahual.png 1x, /uploads/nahual/nahual@2x.png 2x"
           alt="Nahual / Logo mockups">
    <img class="project-detail__img" src="/uploads/nahual/nahual-mockups.png"
         srcset="/uploads/nahual/nahual-mockups.png 1x, /uploads/nahual/nahual-mockups@2x.png 2x"
         alt="Nahual / Logo mockups">
  @endsection

@endsection
