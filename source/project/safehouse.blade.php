@extends('_layouts.project')
@section('title', 'SafeHouse')
@section('description', 'SafeHouse is a white label VPN mobile app for Android and iOS.')
@section('top_link', '← Back')
@section('project_name', 'SafeHouse')

@section('body')
    
  @section('project_name')
    SafeHouse
  @endsection

  @section('project_intro')
    SafeHouse is a white label VPN mobile app for Android and iOS.
  @endsection


  @section('project_body')
    <img class="project-detail__img" src="/uploads/safehouse/safehouse-app.png"
         srcset="/uploads/safehouse/safehouse-app.png 1x, /uploads/safehouse/safehouse-app@2x.png 2x"  
         alt="Brand on background">
  @endsection

   
@endsection
