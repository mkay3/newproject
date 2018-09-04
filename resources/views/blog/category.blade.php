@extends('blog.blog_layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Category</div>

                <div class="card-body">
                    {!! Form::open(array('route' => 'category.store')) !!}
                    
                    <div class="form-group">
					    {!! Form::label('catname', 'Category Name') !!}
					    <div class="col-md-6">
					    	{!! Form::text('catname', null, ['class' => 'form-control']) !!}
						</div>
					</div>
               		{!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                       
                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
