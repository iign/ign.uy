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
        I’m a designer-developer, focused on simple and beautiful solutions.
    </p>
    <p>
        I design and build effective websites and digital products for clients that
        value both technical execution and visual impact.
    </p>
</div>

@include('_partials.projects_grid')


<div class="container">
    <div class="archived">
        <h2>Archived</h2>
        <ul>
            <li>
                <a href="/project/nahual">Proyecto Nahual (logo design)</a>
            </li>
        </ul>
    </div>

</div>

@endsection