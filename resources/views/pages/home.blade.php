@extends('layouts.layout')

@section('content')
<h2>MY PROJECTS</h2>

<ul>
    @foreach ($projects as $project)
    <li>
        <h3>{{$project->name}}</h3>
        <ul>
            <li>
                <i><strong>languages:</strong></i>  {{$project->languages}}
            </li>
            <li>
                <i><strong>completed:</strong></i> {{$project->completed == 0 ? 'no' : 'yes'}}
            </li>
        </ul>
    </li>
    @endforeach
</ul>

@endsection