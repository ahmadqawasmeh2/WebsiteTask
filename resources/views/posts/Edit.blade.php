
@extends('layouts.app')
@section('content')

<form action="" method="POST">
    @csrf
        <div class="container">
                <div class="card bg-light mb-3" style="margin-top: 36px;">
          <div class="card-header" style="background-color:rgba(136, 136, 136, 0.88);">
            <h2>Edit Post</h2> </div>

       <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$post->title}}"  placeholder="Enter Subject" name="title" >

          </div>
         
          <div class="form-group">
            <label for="exampleTextarea">Discriptions</label>
            <textarea class="form-control" id="exampleTextarea"  rows="3" name="description">{{$post->description}}</textarea>
          </div>

           <div class="form-group">
          <input type="hidden" formmethod="PUT">
          <button type="submit" class="btn btn-primary float-right" name="Create Post">Edit</button>
        </div>
      </form>
</div>

   @endsection
