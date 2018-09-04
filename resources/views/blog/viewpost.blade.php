@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
    </div>

    <div class="col-sm-9">
    @if(Session::has('status'))
      <span class="text-primary">{{ Session::get('status') }}</span>
    @endif    
      <h4><small>RECENT POSTS</small></h4>
      <hr>
      <h2>{{ $post->title }}</h2>
      <h6><img src="/uploads/{{ $post->image_name }}" height="300" width="640px"></h6> 
      <h5><span class="glyphicon glyphicon-time"></span> Post by {{ $post->user->name }}, created at  {{ $post->created_at }}.</h5>
      <h5><span class="label label-danger">Category: {{ $post->category->cat_name }} </span> </h5><br>
      <p>Description: {{ $post->description }}</p>
      <br><br>

      <h4>Leave a Comment:</h4>
      {!! Form::open(['url'=>'comment/store'])  !!}
        <div class="form-group">
          {!! Form::hidden('post_id',$post->id) !!}
          {!! Form::textarea('comment',null,array('class'=>'form-control','rows'=>3)) !!}          
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      @if($errors->has('comment'))
          <span class="text-danger">{{ $errors->first('comment') }}</span>
        @endif
      {!! Form::close() !!}
      <br><br>
      
      <p><span class="badge">{{ $post->comments->count() }}</span> Comments:</p><br>
      @foreach($post->comments as $comment)
      <div class="row">
        <div class="col-sm-2 text-center">
          <img src="bandmember.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>

        <div class="col-sm-10">
        <h4>{{ $comment->user->name }} <small>{{ $comment->created_at }}</small></h4>
          <p>{{ $comment->description  }}.</p>
        <!--  <p><span class="badge">1</span> Comment:</p><br>
          <div class="row">
            <div class="col-sm-2 text-center">
              <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
            </div>
            <div class="col-xs-10">
              <h4>Nested Bro <small>Sep 25, 2015, 8:28 PM</small></h4>
              <p>Me too! WOW!</p>
              <br>
            </div>
          </div> -->
        </div>
         </div>
         @endforeach
    </div>
  </div>
</div>


@endsection