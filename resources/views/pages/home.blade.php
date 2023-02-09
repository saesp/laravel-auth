@extends('layouts.layout')


@section('content')

<h2 class="mb-4">MY PROJECTS</h2>

<ul>
    @foreach ($projects as $project)

    <li class="mb-3">
        <h3 class="d-inline-block"><a href="{{route('project.show', $project) }}">{{ucfirst($project->name)}}</a></h3>
        <span><a href="{{route('project.delete', $project)}}">Delete</a></span>

        <div>{{$project->release_date}}</div>

        <ul>
            <li>
                <i><strong>Languages:</strong></i>  {{$project->languages}}
            </li>
            <li>
                <i><strong>Completed:</strong></i> {{$project->completed == 0 ? 'no' : 'yes'}}
            </li>
        </ul>
    </li>

    @endforeach
</ul>

@endsection