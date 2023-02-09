@extends('layouts.layout')

@section('content')
<h2 class="mb-4">{{$project->name}}</h2>

<ul>
    <?php if($project->description != null){?>
    <li>
        <i><strong>Description:</strong></i> {{$project->description}} 
    </li> <?php } else
        null 
    ?>

    <li>
        <i><strong>Languages:</strong></i> {{$project->languages}}
    </li>

    <?php if($project->main_image != null){?>
    <li>
        <i><strong><a href="{{$project->main_image}}">Image link</a></strong></i>
    </li> <?php } else
        null 
    ?>

    <li>
        <i><strong><a href="{{$project->repo_link}}">Repo link</a></strong></i>
    </li>

    <?php if($project->view_link != null){?>
    <li>
        <i><strong><a href="{{$project->view_link}}">View link</a></strong></i> 
    </li> <?php } else
        null 
    ?>

    <li>
        <i><strong>Completed:</strong></i> {{$project->completed == 0 ? 'No' : 'Yes'}}
    </li>

    <li>
        <i><strong>Release date:</strong></i> {{$project->release_date}}
    </li>
</ul>
@endsection