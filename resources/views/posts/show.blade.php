@extends('posts.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Posts Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Title : {{ $post->title }}</h5>
        <p class="card-text">Description : {{ $post->description }}</p>
  </div>
       
    </hr>
  
  </div>
</div>