<!doctype html>
<html lang="en">
@include('_partials.head')

<body>
  @include('_partials.header')

  <div class="container">
    <h1 class="project-detail__title">
      @yield('project_name')
    </h1>
  </div>

  <div class="project-detail__intro">
    <div class="container">
      @yield('project_intro')
    </div>
  </div>

  <section class="section-project">
    <div class="container">
      @yield('project_body')
    </div>
  </section>

  @include('_partials.footer')


</body>

</html>
