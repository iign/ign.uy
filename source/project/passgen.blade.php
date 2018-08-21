@extends('_layouts.project')
@section('title', 'PassGen')
@section('description', 'PassGen is a white label VPN mobile app for Android and iOS.')
@section('top_link', '← Back')
@section('project_name', 'PassGen')

@section('body')
    
  @section('project_name')
    PassGen
  @endsection

  @section('project_intro')
    <p>
      PassGen is a very simple tool/experiment that I created to quickly generate 
    passwords for day to day use.
    </p>
    <p>
      Try it out at <a href="http://passgen.montag.uy/">passgen.montag.uy</a> or see the code
      on <a href="https://github.com/iign/passgen">GitHub</a>.
    </p>
  @endsection


  @section('project_body')
    <img class="project-detail__img" src="/uploads/passgen/passgen.jpg"
         srcset="/uploads/passgen/passgen.jpg 1x, /uploads/passgen/passgen@2x.jpg 2x"  
         alt="Brand on background">
  @endsection

   
@endsection
