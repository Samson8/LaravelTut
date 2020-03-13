@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 p-5"><img src="/img/passport.png" class="rounded-circle" style="height:150px"/></div>
        <div class="col-md-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Add new post</a>
            </div>
            <div class="d-flex">  
                <div><strong>{{ $user->posts->count() }}</strong> post</div>
                <div class="pl-5"><strong>23k</strong> followers</div>
                <div class="pl-5"><strong>254</strong> following</div>
            </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
        <div>{{ $user->profile->description }}</div>
        <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-4">
        @foreach ($user->posts as $post)
            <div class="col-md-4 pb-4">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </div>
        @endforeach
        
    </div>
</div>
@endsection
