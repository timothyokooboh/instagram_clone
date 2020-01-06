@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="border-bottom:1px solid #ddd; font-size:0.8rem">
       <div class="col-3 p-5">
           <img src="{{$user->profile->profileImage()}}" style="max-height:100px;" class="rounded-circle">
       </div>
       <div class="col-9 pt-5">
          <div class="d-flex justify-content-between align-items-baseline">
          <div class="d-flex align-items-center pb-3">
          <div class="h4">{{$user->username}}</div>
         <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
          </div>
          @can('update', $user->profile)
            <a href="/p/create">Add new post </a>
          @endcan

          </div>

          @can('update', $user->profile)
          <a href="/profile/{{$user->id}}/edit" class="">Edit profile</a>
          @endcan

          <div class="d-flex">
            <div class="pr-5"><strong>{{$postCount}}</strong> Posts</div>
            <div class="pr-5"><strong>{{$followersCount}}</strong>Followers</div>
            <div class="pr-5"><strong>{{$followingCount}}</strong>Following</div>
           </div>
           <div class="pt-3" style="font-weight:bold">{{$user->profile->title}}</div> 
           <div>{{$user->profile->description}}
           </div>
          <div>
            <a href="https://www.freecodecamp.org">
              <h4>{{$user->profile->url}}</h4> 
            </a> 
        </div>
       </div>
    </div>
    <div class="row pt-4">
    
    @foreach($user->posts as $post)
    <div class="col-4 pb-4">
       <a href="/p/{{$post->id}}">
       <img src="/storage/{{$post->image}}" class='w-100'>
       </a>
   </div>   
    @endforeach 
     
</div>
<div> 
   <h1> Hello there</h1>
  </div>  
@endsection
