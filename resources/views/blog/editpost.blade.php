@extends('layouts.app')

@section('content')
 @if (Session::has('status'))
        <span class="text-primary"> {!! session('status') !!}</span>
   @endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Post') }}</div>
                <div class="card-body">
                   
                    {{ Form::model($post, array('route' => array('post.update',$post->id),'method' => 'PUT')) }}
                        <div class="form-group">
                          {!! Form::label('title', 'Post title') !!}
                          {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        @if( $errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }} </span>
                        @endif
                        </div>

                        <div class="form-group">
                          {!! Form::label('description', 'Post description') !!}
                          {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                        @if( $errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }} </span>
                        @endif
                        </div>
                     
                        <div class="form-group">
                            {!! Form::label('category_id', 'Post Category') !!}
                            {!! Form::select('category_id', $categories, null,['class' => 'form-control']) !!}     
                        @if( $errors->has('category_id'))
                            <span class="text-danger">{{ $errors->first('category_id') }} </span>
                        @endif
                        </div>
                        
                         <div class="form-group">
                           {!! Form::label('image_name', 'Select Image') !!}
                           {!! Form::file('image_name', ['class' => 'form-control']) !!}
                        </div>

                        <button type="submit" class="btn btn-primary">
                            {{ __('Update') }}
                        </button>
                          
                      {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
