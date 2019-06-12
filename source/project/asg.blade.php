@extends('_layouts.project')
@section('title', '/ASG')
@section('description', '/ASG landing page')
@section('top_link', '← Back')
@section('project_name', '/ASG')

@section('body')

  @section('project_name')
    /ARCHSOURCING
  @endsection

  @section('project_intro')
    <p>
      /ARCHSOURCING is a cutting high-tech firm that helps busy architects to
      develop their projects, reduce costs and streamline production with next
      generation use of bim technology while architects focus on expanding their company.
    </p>
    <p>
        They approached looking for someone to rebuild their website's homepage
        from their own designs.
    </p>
    <p>
        Visit their website: <a href="http://archsourcing.com">/ARCHSOURCING</a>.
    </p>

  @endsection

  @section('project_body')
    <img class="project-detail__img" src="/uploads/asg.jpg"
           srcset="/uploads/asg.jpg 1x, /uploads/asg@2x.jpg 2x"
           alt="/ASG / website">
  @endsection

@endsection
