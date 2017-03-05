@extends('_layouts.master')
@section('title', 'Nacho Toledo')
@section('description', 'I’m a front-end designer and developer, focused on simple solutions and intuitive interfaces.')
@section('top_link', 'Nacho Toledo')

@section('body')
    <div class="hallo">
        ...
    </div>

    <div class="intro">
      <p>
        I’m a front-end designer &amp; developer, focused on simple solutions and intuitive interfaces.
        <span class="intro__more-link js-more">
          more
        </span>
      </p>
      <div class="intro__more">
        <p>
          In 2014 I founded <a href="http://montag.uy">MONTAG</a>, a small development and design shop. Since then, I’ve been working with clients building websites, apps, brands and other stuff to help them excel at what they do.
        </p>
        <p>
          I specialize in HTML markup, but I spend my days working also with PHP and JavaScript. When I’m not hacking on code I’m prototyping, wireframing or designing with Sketch, Illustrator or Photoshop.
        </p>
        <p>
          I’m passionate about humans and solving complex problems in simple ways. I use technology and design to do so. I love photography, reading, bikes, languages and learning new stuff.
        </p>
      </div>
    </div>

    <section class="section-projects">

      <div class="container">
        <div class="project-row">
          <a href="/project/nugen" class="project">
            <img class="project__img" src="/uploads/nugen.png"
            srcset="/uploads/nugen.png 1x, /uploads/nugen@2x.png 2x" alt="NuGen">
            <div class="project__overlay">
              <div class="project__overlay-content">
                <h3 class="project__title">
                  NuGen
                </h3>
                <h4 class="project__cat">Identity</h4>
              </div>
            </div>
          </a>
          <a href="/project/safehouse" class="project">
            <img class="project__img" src="/uploads/safehouse.png"
            srcset="/uploads/safehouse.png 1x, /uploads/safehouse@2x.png 2x" alt="SafeHouse">
            <div class="project__overlay">
              <div class="project__overlay-content">
                <h3 class="project__title">
                SafeHouse
                </h3>
                <h4 class="project__cat">Mobile design</h4>
              </div>
            </div>
          </a>

          <a href="/project/passgen" class="project">
            <img class="project__img" src="/uploads/passgen.png"
            srcset="/uploads/passgen.png 1x, /uploads/passgen@2x.png 2x" alt="PassGen">
            <div class="project__overlay">
              <div class="project__overlay-content">
                <h3 class="project__title">
                PassGen
                </h3>
                <h4 class="project__cat">UX/UI, Markup, Website</h4>
              </div>
            </div>
          </a>

        </div> <!-- project-row -->

        <div class="project-row">
          <a href="/project/nahual" class="project">
            <img class="project__img" src="/uploads/nahual.png" alt="Nahual Project">
            <div class="project__overlay">
              <div class="project__overlay-content">
                <h3 class="project__title">
                  Proyecto Nahual
                </h3>
                <h4 class="project__cat">Logo</h4>
              </div>
            </div>
          </a>
          <a href="/project/flying-cargo" class="project">
            <img class="project__img" src="/uploads/flying-cargo.png"
            srcset="/uploads/flying-cargo.png 1x, /uploads/flying-cargo@2x.png 2x" alt="Flying Cargo">
            <div class="project__overlay">
              <div class="project__overlay-content">
                <h3 class="project__title">
                Flying Cargo
                </h3>
                <h4 class="project__cat">Web Design</h4>
              </div>
            </div>
          </a>

          <a href="/project/mus" class="project">
            <img class="project__img" src="/uploads/mus.png" 
                 srcset="/uploads/mus.png 1x, /uploads/mus@2x.png 2x" alt="Mus App">
            <div class="project__overlay">
              <div class="project__overlay-content">
                <h3 class="project__title">
                Mus web App
                </h3>
                <h4 class="project__cat">Web Markup</h4>
              </div>
            </div>
          </a>

        </div> <!-- project-row -->

      </div> <!-- container -->


    </section>
@endsection
