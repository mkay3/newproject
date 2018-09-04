@extends('blog.blog_layout')

@section('content')
@if(Session::has('status'))
                <div class="alert alert-success">
                    {{ Session::get('status') }}
                </div>
@endif

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Post') }}</div>

                <div class="card-body">
                    
                    {{ Form::open( array('url'=>'repo/post','enctype'=>'multipart/form-data') ) }}
                     
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Post title') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}"  autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Post Description')}}</label>
                            <div class="col-md-6">
                                <textarea name="description" class="form-control">{{ old('description') }}</textarea> 
                                @if ($errors->has('description'))
                                        <span class="text-danger">
                                           {{ $errors->first('description') }}
                                        </span>
                                @endif
                             </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('Post Category')}}</label>
                            <div class="col-md-6">
                                <select name="category_id" autofocus>
                                    <option value="">Select</option>
                                    <option value="1">Default</option>
                                    @foreach($categories as $category)
                                      <option value={{ $category->id }}> {{ $category->cat_name }}</option>
                                    @endforeach
                                </select>
                            
                                @if ($errors->has('category_id'))
                                    <span class="text-danger"> 
                                        {{ $errors->first('category_id') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image_name" class="col-md-4 col-form-label text-md-right">{{ __('Select Image')}}</label>
                            <div class="col-md-6">
                                <input type="file" name="image_name"  autofocus>
                                @if ($errors->has('image_name'))
                                    <span class="text-danger">
                                        {{ $errors->first('image_name') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                      
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
