<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="E2nwpKLPgOTygWUNLb5FiX6p2fHnQZdU8WOxybeS">

    <title>Laravel</title>

    <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="http://localhost:8000/css/app.css" rel="stylesheet">
    <link href="http://localhost:8000/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    {!! Html::style('css/dashboard.css') !!}

</head>
<body>

<!-- Start: Header Part   -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Blog</a>                      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav menuitems ">
        <li onclick="changelabel(this)"><a class="nav-link" href="{{ route('post.create') }}">{{ __('Create New Post') }}</a></li>
        <li onclick="changelabel(this)"><a class="nav-link"  href="{{ route('category.create') }}">{{ __('Create New Category') }}</a></li>
        <li onclick="changelabel(this)"> <a class="nav-link" href="{{ url('post/manage') }}">{{ __('Manage Posts') }}</a></li>
        <li onclick="changelabel(this)"><a class="nav-link" href="{{ url('category/manage') }}">{{ __('Manage Categories') }}</a></li>
        
      </ul>
      <ul class="nav navbar-nav menuitems logout">
      <li class="active"><a  href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a></li>
      <li><a  href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf
        </form>
      </ul >
      @yield('dropdown')

      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- End: Header Part   -->

<!-- Welcome Message -->
@yield('welcome')

<!-- Start: Content Part   -->
<div id="app">
<main class="py-4">
            @yield('content')
</main>


<div class="row">
  @yield('leftsection')
  @yield('rightsection')
</div>
 
 <!-- End: Content Part   -->

<div class="footer">
  <h3>Footer</h3>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  {!! Html::script('js/dashboard.js') !!}
</div>
</div>
  
</body>
</html>
