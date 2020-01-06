@extends('layouts.app')

@section('content')
<div class="container">
<div><a href="profile/{{auth()->user()->id}}">Go to dashboard</a></div>
@foreach($posts as $post)
<div class="row">
  <div class="col-6 offset-3">
    <a href="/profile/{{$post->user->id}}"><img src="/storage/{{$post->image}}" class="w-100"></a>
   </div>
</div>
<div class="row pt-2 pb-4"></div>
<div class="col-6 offset-3">
 <div>
  
  <p>
  <a href="/profile/{{$post->user->id}}" class="font-weight-bold text-dark">{{$post->user->username}}</a> {{$post->caption}}
  </p>
</div>
</div>
@endforeach

<div class="row">
<div class="col-12 d-flex justify-content-center">
   {{$posts->links()}}
</div>
</div>
</div>
@endsection
