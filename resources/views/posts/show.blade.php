@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Back</a>
    <div class="card card-block bg-faded">
        <h1 class="card-title">{{$post->title}}</h1>
        <img class="card-img-left" src="/storage/cover_images/{{$post->cover_image}}" alt="{{$post->cover_image}}" style="width:100%">   
        <div class="card-body">
            <div class="card-text">
                    {!!$post->body!!}
            </div>
        </div>
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>       
    <hr>
    @if(!Auth::guest() && Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class'=>'btn-danger'])}}
        {!!Form::close()!!}
    @endif
@endsection