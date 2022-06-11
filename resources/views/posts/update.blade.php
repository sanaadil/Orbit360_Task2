@extends('posts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('post/' .$post->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$post->id}}" id="id" />
        <label>Title</label></br>
        <input type="text" name="title" id="title" value="{{$post->title}}" class="form-control"></br>
        <label>Descrition</label></br>
        <input type="text" name="description" id="description" value="{{$post->description}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop