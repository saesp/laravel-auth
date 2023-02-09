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
        <i><strong>Image link:</strong></i> {{$project->main_image}}
    </li> <?php } else
        null 
    ?>

    <li>
        <i><strong>Repo link:</strong></i> {{$project->repo_link}}
    </li>

    <?php if($project->view_link != null){?>
    <li>
        <i><strong>View link:</strong></i> {{$project->view_link}}
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