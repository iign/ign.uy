@extends('_layouts.project')
@section('title', 'NuGen')
@section('project_name', 'NuGen')

@section('body')
    
  @section('project_name')
    NuGen X
  @endsection

  @section('project_intro')
    NuGen is an israeli startup commited to make this world a little bit better.
  @endsection


  @section('project_body')
    <img class="project-detail__img" src="/uploads/nugen/mountains.jpg" alt="Brand on background">
    <img class="project-detail__img" src="/uploads/nugen/brand.jpg" alt="Brand variations">
    <img src="/uploads/nugen/triangles.jpg" srcset="/uploads/nugen/triangles.jpg 1x, /uploads/nugen/triangles@2x.jpg 2x" alt="Brand">
  @endsection



   
@endsection
