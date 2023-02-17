@extends('layouts.layout')


@section('content')

    <form action="{{route('project.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name">
        
        <br>
        <label for="description">Description</label>
        <input type="text" name="description">
        
        <br>
        <label for="languages">Languages</label>
        <input type="text" name="languages">
        
        <br>
        <label for="main_image">Image</label>
        <input type="file" name="main_image">
        
        <br>
        <label for="repo_link">Repo link</label>
        <input type="url" name="repo_link">
        
        <br>
        <label for="view_link">View link</label>
        <input type="url" name="view_link">
        
        <br>
        <label for="completed">Completed</label>
        <br>
        <input type="radio" id="yes_radio" name="completed" value="yes">
        <label for="yes_radio">Yes</label>
        <br>
        <input type="radio" id="no_radio" name="completed" value="no">
        <label for="no_radio">No</label>

        <br>
        <label for="release_date">Release date</label>
        <input type="date" name="release_date">

        <br>
        <button type="submit">EDIT</button>

    </form>

@endsection