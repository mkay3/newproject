@extends('blog.blog_layout')

@section('dropdown')
<div class="dropdown form-group">
          @if(isset($categories))
              <select class="form-control"> 
                  <option onclick="location.href='{{ url('dashboard') }}'">All </option>
              @foreach($categories as $category)
                    <option value="{{ $category->id }}" onclick="location.href='{{ url('dashboard/'.$category->id) }}'" @if(isset($catid) && $catid==$category->id) {{ 'selected=selected'}} @endif  )) >{{ $category->cat_name }}</option>
              @endforeach
              </select>
            @endif
      </div>
@endsection

@section('welcome')
  <div class="header">
    <h2>Welcome  {{ auth()->user()->name }} </h2>
       {{-- You are logged in 
    <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
    </a> --}}
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
  </form>
</div>
@endsection

{{-- Main CODE 
<div>
<div class="dropdown form-group">
@if(isset($categories))
    <select class="form-control"> 
        <option onclick="location.href='{{ url('dashboard') }}'">All </option>
  @foreach($categories as $category)
          <option value="{{ $category->id }}" onclick="location.href='{{ url('dashboard/'.$category->id) }}'" @if(isset($catid) && $catid==$category->id) {{ 'selected=selected'}} @endif  )) >{{ $category->cat_name }}</option>
  @endforeach
    </select>
@endif
</div> 
 <ul class="nav navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('post.create') }}">{{ __('Create New Post') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category.create') }}">{{ __('Create New Category') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('post/manage') }}">{{ __('Manage Posts') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('category/manage') }}">{{ __('Manage Categories') }}</a>
        </li>
  </ul>
</div>
END MAIN Code --}}


@section('leftsection')
  <div class="leftcolumn">
       @if (session('status'))
            <span>{!! session('status') !!}</span>
       @endif

    @if(isset($posts) )
    @foreach($posts as $key=>$post)
    <div class="card post">
        <h2>{{ $post->title }}</h2>
        <div class="fakeimg">
          <a href="{{ url('post/view/'.$post->id) }}" ><img src="/uploads/{{ $post->image_name }}" height="250" width="430px" /></a>
          <p class="desc">{{ substr($post->description,0,100) }} {{ substr($post->description,101) }}</p>
        @if(strlen($post->description)>200)
        <a href="javascript:void(0)" onclick="showdesc(this)" id="readmore">read more</a>
        <a href="javascript:void(0)" class="hidden" onclick="hidedesc(this)" id="readless">read less</a>
        @endif
        </div>
    </div>
    @endforeach
    <div class="paginationdiv">  {{ $posts->links() }} </div> 
    @else
    <div class="card emoty" >
      There is no post.
    </div>
    @endif
  </div>
  @endsection
@section('rightsection')
  <div class="rightcolumn">
    <div class="card post">
      <h3>Popular Post</h3>
      @if(count($popularPosts))
      @foreach($popularPosts as $popularPost)
        <a href="/post/view/{{ $popularPost->id }}">
        <div class="fakeimg">
            <img src="/uploads/{{ $popularPost->image_name }}" height="100" width="150">
        </div>
        <span>{{ $popularPost->title }}</span></a>
      @endforeach
      @else
      there is no post
      @endif
    </div>
    <!--<div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>-->
  </div>
  @endsection

  



