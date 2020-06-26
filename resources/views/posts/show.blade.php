@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <div class="row">
                      @foreach($posts as $post)
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">{{ $post->user->name }}</h5>
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <a href="{{route('Pages.pages.editPage' , $post->id)}}"class="btn--radius btn-info">Edit</a>
                        <a href="{{route('Pages.pages.delete' , $post->id)}}" class="btn--radius btn-danger">Delete</a>
                      </div>
                    </div>
                  </div>
                   @endforeach
                </div>
               

                </div>

                 <div class="card-footer text-muted">
                     <a href="{{route('Pages.pages.addpost')}}" class="btn btn-primary float-right">Add Post</a>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
