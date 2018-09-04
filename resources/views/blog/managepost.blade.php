@extends('layouts.app')

@section('content')
<div class="container content">
@if(Session::has('status'))
  <span class="text-primary"> {!! session('status') !!} </span>
@endif
  <span class='text-primary hidden'>Post successfully deleted</span>
  <h2>User Posts List</h2>
  <?php $sno=1; ?>   
  {!! Form::open(['url'=>'post/deleteselected','id'=>'multipledeleteform']) !!}
 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Select</th>
        <th>S.No </th>
        <th>Title</th>
        <th>Image</th>
        <th>Description</th>
        <th>Created</th>
        <th>Updated</th>
        <th colspan="2">Action</th> 
      </tr>
    </thead>
    <tbody>
      @if(count($posts))
      @foreach($posts as $key=>$post)
        <tr class="row-{{ $post->id }}">
          <td>{!! Form::checkbox('post_ids[]',$post->id) !!}</td>
          <td>{{ $sno }} <?php $sno++; ?></td>
          <td>{{ $post->title }}</td>
          <td><img src="/uploads/{{ $post->image_name }}" height="50" width="70px" ></td>
          <td>{{ substr($post->description,0,100) }}</td>
          <td>{{ $post->created_at }}</td>
          <td>{{ $post->updated_at }}</td>
          <td><a href="{{ url('post/edit/'.$post->id) }}" class="btn btn-primary">Edit</a></td>
          <td>
          <!-- <a href="{{ url('post.delete',$post->id) }}" data-method="delete" > Delete </a> -->
         <!-- {!! Form::open(['method'=>'DELETE', 'url'=> array('post',$post->id)]) !!}
            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
          {!! Form::close() !!}
          -->
          <a href="#myModal" class="trigger-btn btn btn-danger" onclick="passId($(this).attr('id'))" id="{{ $post->id }} " data-toggle="modal">Delete</a>
          </td>
        </tr>
      @endforeach


      <tr>
      <td><a href="#myModal2" class="trigger-btn btn btn-danger" data-toggle="modal">Delete Selected</a></td>
       <td><a href="#myModal3" class="trigger-btn btn btn-danger" data-toggle="modal">Delete All</a><!-- {!! Form::submit('Delete Selected') !!} -->
       {!! Form::close() !!}
      </td></tr>
    </tbody>
  </table>
   @else
   Sorry, there is no post currently.
   @endif

</div>

<!-- Modal HTML (for single delete) -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header">
        <div class="icon-box">
          <i class="material-icons">&#xE5CD;</i>
        </div>        
        <h4 class="modal-title">Are you sure?</h4>  
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <p>Do you really want to delete this record?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger deletebtn" onclick="deleteRow($(this).attr('id'))">Delete</button>
      </div>
    </div>
  </div>
</div>     

<!-- Modal HTML (for multiple delete) -->
<div id="myModal2" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header">
        <div class="icon-box">
          <i class="material-icons">&#xE5CD;</i>
        </div>        
        <h4 class="modal-title">Are you sure?</h4>  
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <p>Do you really want to delete selected records? This process cannot be undone.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger deletebtn" onclick="$('#multipledeleteform').submit()">Delete</button>
      </div>
    </div>
  </div>
</div>  

<!-- Modal HTML (for all delete) -->
<div id="myModal3" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header">
        <div class="icon-box">
          <i class="material-icons">&#xE5CD;</i>
        </div>        
        <h4 class="modal-title">Are you sure?</h4>  
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <p>Do you really want to delete all records? This process cannot be undone.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger deletebtn" onclick="location.href='{{ url('post/delete-all') }}'">Delete All</button>
      </div>
    </div>
  </div>
</div>   


<!-- Button HTML (to Trigger Modal) -->
  {{-- <a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open Confirm Modal</a> --}}
@endsection

