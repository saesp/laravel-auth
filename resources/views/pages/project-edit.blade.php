@extends('layouts.layout')


@section('content')

    <form action="{{route('project.update', $project)}}" method="POST">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" value="{{$project -> name}}">
        
        <br>
        <label for="description">Description</label>
        <input type="text" name="description" value="{{$project ->description}}">
        
        <br>
        <label for="languages">Languages</label>
        <input type="text" name="languages" value="{{$project ->languages}}">
        
        <br>
        <label for="main_image">Image link</label>
        <input type="url" name="main_image" value="{{$project ->main_image}}">
        
        <br>
        <label for="repo_link">Repo link</label>
        <input type="url" name="repo_link" value="{{$project ->repo_link}}">
        
        <br>
        <label for="view_link">View link</label>
        <input type="url" name="view_link" value="{{$project ->view_link}}">
        
        <br>
        <label for="completed">Completed</label>
        <input type="text" name="completed"  value="{{$project ->completed}}">
        
        <br>
        <label for="release_date">Release date</label>
        <input type="date" name="release_date" value="{{$project ->release_date}}">

        <br>
        <button type="submit">EDIT</button>

    </form>

@endsection