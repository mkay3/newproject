@extends('layouts.app')

@section('content')
<div class="container categorycontent">
@if(Session::has('status'))
  <span class="text-primary"> {!! session('status') !!} </span>
@endif
  <span class='text-primary hidden'>Category successfully deleted</span>
  <h2>User Categories List</h2>
  <?php $sno=1; ?>   
  {!! Form::open(['url'=>'repo/category/delete','id'=>'multipledeleteform']) !!}
 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Select</th>
        <th>S.No </th>
        <th>Title</th>
        <th>Created</th>
        <th>Updated</th>
        <th colspan="2">Action</th> 
      </tr>
    </thead>
    <tbody>
      @if(count($categories))
      @foreach($categories as $key=>$category)
        <tr class="row-{{ $category->id }}">
          <td>{!! Form::checkbox('cat_ids[]',$category->id) !!}</td>
          <td>{{ $sno }} <?php $sno++; ?></td>
          <td>{{ $category->cat_name }}</td>
          
          <td>{{ $category->created_at }}</td>
          <td>{{ $category->updated_at }}</td>
          <td><a href="{{ url('repo/category/edit/'.$category->id)}}" class="btn btn-primary">Edit</a></td>
          <td>
        <!-- <a href="{{ url('post.delete',$category->id) }}" data-method="delete" > Delete </a> -->
        <a href="javascript:void(0);" class="btn btn-danger deletecategory" onclick="deleteCat({{ $category->id}})" id="{{ $category->id}}">Delete</button>
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
   Sorry, there is no category currently.
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
        <p>Do you really want to delete this category?</p>
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
        <p>Do you really want to delete selected categories? This process cannot be undone.</p>
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
        <p>Do you really want to delete all categories? This process cannot be undone.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger deletebtn" onclick="location.href='{{ url('/repo/category/delete-all') }}'">Delete All</button>
      </div>
    </div>
  </div>
</div>   


<!-- Button HTML (to Trigger Modal) -->
  {{-- <a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open Confirm Modal</a> --}}
@endsection

