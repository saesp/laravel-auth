@extends('layouts.layout')


@section('content')

<h2 class="mb-4">MY PROJECTS</h2>

{{-- <img src="{{ asset('storage/planets.jpeg') }}" width="300px"> --}}

@auth
    <a href="{{route('project.create')}}"><button class="mb-3">ADD NEW PROJECT</button></a>
@endauth

<ul class="list-unstyled">
    @foreach ($projects as $project)

    <li class="mb-3">
        <h3 class="d-inline-block"><a class="text-decoration-none" href="{{route('project.show', $project) }}">{{ucfirst($project->name)}}</a></h3>
        @auth
            <span><a class="text-decoration-none m-2" href="{{route('project.delete', $project)}}">Delete</a></span> 
            <span><a class="text-decoration-none" href="{{route('project.edit', $project)}}">Edit</a></span>
        @endauth
        

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