@extends('_layouts.project')
@section('title', 'Late Night Streaming')
@section('description', 'Late Night Streaming website markup')
@section('top_link', '← Back')
@section('project_name', 'Late Night Streaming')

@section('body')

@section('project_name')
Late Night Streaming
@endsection

@section('project_intro')
<p>
    Web markup for <em>Late Night Streaming</em>, movie database project made by Global Commerce Media.
</p>
<p>
    -> Mobile-first, responsive web markup.
    <br>
    -> Technologies used: HTML, Sass/CSS, Bootstrap grid &amp; utilities, Gulp, BrowserSync,
    GitHub &amp; Netlify for automatic deployments.
    <br>
    -> Design by <a href="https://grmn.ws">GRMN Studio</a>
</p>

@endsection

@section('project_body')

<img class="project-detail__img img-shadow" src="/uploads/lns/home.jpg" alt="Late Night Streaming homepage">

<img class="project-detail__img img-shadow" src="/uploads/lns/404.jpg" alt="Late Night Streaming 404 page">


<p>
    Feel free to explore (and inspect!) the demo site:
<ul>
    <li><a href="https://latenightstreaming.netlify.app/">Home page</a></li>
    <li><a href="https://latenightstreaming.netlify.app/archive">Archive</a></li>
    <li><a href="https://latenightstreaming.netlify.app/person">Actor profile</a></li>
    <li><a href="https://latenightstreaming.netlify.app/movie">Film page</a></li>
    <li><a href="https://latenightstreaming.netlify.app/providers">Providers</a></li>
    <li><a href="https://latenightstreaming.netlify.app/provider">Provider detail</a></li>
    <li><a href="https://latenightstreaming.netlify.app/lists">Collections</a></li>
    <li><a href="https://latenightstreaming.netlify.app/list">List detail</a></li>
    <li><a href="https://latenightstreaming.netlify.app/page">Default page</a></li>
    <li><a href="https://latenightstreaming.netlify.app/contact">Contact page</a></li>
</ul>
</p>


@endsection

@endsection