@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-8">
<img src="/storage/{{$post->image}}" class="w-100">
</div>
<div class="col-4">
  <div class='d-flex align-items-center'>
    <div class="pr-5">
      <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" style="min-width:40px;">
    </div>
    <div class="pr-3">
    <a href="/profile/{{$post->user->id}}" class="font-weight-bold text-dark">{{$post->user->username}}</a>
    </div>
    <div>
    <a href="#">follow</a>
    </div>
  </div>
  <hr>
  <p>
  <a href="/profile/{{$post->user->id}}" class="font-weight-bold text-dark">{{$post->user->username}}</a> {{$post->caption}}
  </p>
</div>
</div>
</div>
@endsection
