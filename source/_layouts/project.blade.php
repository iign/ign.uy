<!doctype html>
<html lang="en">
  @include('_partials.head')
  <body>
    @include('_partials.header')

    <div class="project-detail__title">
        @yield('project_name')
    </div>

    <div class="project-detail__intro">
      @yield('project_intro')
    </div>

    <section class="section-project">
      <div class="container">
        @yield('project_body')
      </div>
    </section>

    @include('_partials.footer')


  </body>
</html>
