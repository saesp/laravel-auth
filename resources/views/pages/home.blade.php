@extends('layouts.layout')

@section('content')
<h2 class="mb-4">MY PROJECTS</h2>

<ul>
    @foreach ($projects as $project)
    <li class="mb-3">
        <h3><a href="{{route('project.show', $project) }}">{{ucfirst($project->name)}}</a></h3>
        <div>{{$project->release_date}}</div>
        <ul>
            <li>
                <i><strong>Languages:</strong></i>  {{$project->languages}}
            </li>
            <li>
                <i><strong>Completed:</strong></i> {{$project->completed == 0 ? 'No' : 'Yes'}}
            </li>
        </ul>
    </li>
    @endforeach
</ul>

@endsection