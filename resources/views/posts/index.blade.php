@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="card card-body card-title">
                <div class="row">
                    <div class="col-nd-4 col-sm-4">
                    <img stule="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    
                    </div>
                    <div class="col-nd-8 col-sm-4">
                        <h3><a href="/posts/{{$post->id}}"> {{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}}</small>
                    </div>
        
                
                </div>
           
            </div>
        @endforeach
        {{$posts->links()}}             

    @else
        <p>No Posts found</p>
    @endif
@endsection;