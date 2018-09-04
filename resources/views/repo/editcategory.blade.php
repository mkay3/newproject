@extends('layouts.app')

@section('content')
@if(Session::has('status'))
  <span class="text-primary"> {!! Session('status') !!} </span>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Category</div>

                <div class="card-body">
                    {!! Form::model($category,array('url' => 'repo/category/'.$category->id,'method' => 'PUT')) !!}
                    
                    <div class="form-group">
                      {!! Form::label('cat_name', 'Category Name') !!}
                      <div class="col-md-6">
                        {!! Form::text('cat_name', null, ['class' => 'form-control']) !!}
                      </div>
                    </div>
                    {!! Form::submit('Update',['class'=>'btn btn-primary']) !!}
   
                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
