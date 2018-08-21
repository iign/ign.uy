@extends('_layouts.project')
@section('title', 'NuGen')
@section('top_link', '← Back')
@section('description', 'NuGen is an israeli startup commited to make this world a little bit better.')
@section('project_name', 'NuGen')

@section('body')
    
  @section('project_name')
    NuGen
  @endsection

  @section('project_intro')
    NuGen is an israeli startup commited to make this world a little bit better.
  @endsection


  @section('project_body')
    <img class="project-detail__img" src="/uploads/nugen/mountains.jpg"
         srcset="/uploads/nugen/mountains.jpg 1x, /uploads/nugen/mountains@2x.jpg 2x"  
         alt="Brand on background">
    <img class="project-detail__img" src="/uploads/nugen/brand.jpg"
         srcset="/uploads/nugen/brand.jpg 1x, /uploads/nugen/brand@2x.jpg 2x"   
         alt="Brand variations">
    <img class="project-detail__img" src="/uploads/nugen/triangles.jpg" 
         srcset="/uploads/nugen/triangles.jpg 1x, /uploads/nugen/triangles@2x.jpg 2x" 
         alt="Brand">
    <img class="project-detail__img" src="/uploads/nugen/business-card.jpg" 
         srcset="/uploads/nugen/business-card.jpg 1x, /uploads/nugen/business-card@2x.jpg 2x" 
         alt="NuGen Business Cards">
    <img class="project-detail__img" src="/uploads/nugen/stationery.jpg" 
         srcset="/uploads/nugen/stationery.jpg 1x, /uploads/nugen/stationery@2x.jpg 2x" 
         alt="NuGen Business Cards">
  @endsection

   
@endsection
