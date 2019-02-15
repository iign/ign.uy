@extends('_layouts.project')
@section('title', 'Logo design')
@section('description')
    Logo design for various companies and startups.
@endsection
@section('top_link', '← Back')
@section('project_name', 'Logo design')

@section('body')

  @section('project_intro')
    <p class="align-center">
      Need a shiny new logo for your app or startup? <br/>
      <a href="mailto:hi@ign.uy">Get in touch</a> or browse more designs on <a href="https://dribbble.com/iign">Dribbble</a>.
    </p>
  @endsection

  @section('project_body')

  <img class="project-detail__img" src="/uploads/logo-design/kaufberater.gif"
         alt="Kaufberater logo">

    <img class="project-detail__img" src="/uploads/logo-design/frontend-mvd-logo.jpg"
         srcset="/uploads/logo-design/frontend-mvd-logo.jpg 1x, /uploads/logo-design/frontend-mvd-logo@2x.jpg 2x"
         alt="Frontend Montevideo Meetup group logo">

    <img class="project-detail__img" src="/uploads/logo-design/gsm-hand-1.jpg"
         srcset="/uploads/logo-design/gsm-hand-1.jpg 1x, /uploads/logo-design/gsm-hand-1@2x.jpg 2x"
         alt="GSM logo">

    <img class="project-detail__img" src="/uploads/logo-design/gsm-hand-2.jpg"
         srcset="/uploads/logo-design/gsm-hand-2.jpg 1x, /uploads/logo-design/gsm-hand-2@2x.jpg 2x"
         alt="GSM logo">

    <img class="project-detail__img" src="/uploads/logo-design/atlas-logo.jpg"
         srcset="/uploads/logo-design/atlas-logo.jpg 1x, /uploads/logo-design/atlas-logo@2x.jpg 2x"
         alt="Atlas Consulting logo">

    {{-- <img class="project-detail__img" src="/uploads/logo-design/alianza-logo.jpg"
         srcset="/uploads/logo-design/alianza-logo.jpg 1x, /uploads/logo-design/alianza-logo@2x.jpg 2x"
         alt="Alianza de Pacientes Uruguay logo"> --}}


  @endsection

@endsection

