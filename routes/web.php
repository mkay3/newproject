<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
 Route::get('hello/', function () {
    echo "hello page";
});

Route::get('hello/{name}/{address?}', function ($name,$address='xyz') {
    echo "hello ".$name." ".$address;
});

Route::get('number/{num}',function($num){
	echo $num." is given number";
})->where(['num'=>'[0-9]+']);

//
Route::get('user/dashboard/profile',function(){
	echo "test";
})->name('user');

//
Route::get('user/dashboard/profile',['as'=>'user',function(){
	echo "test";
}]);

Route::get('/',function(){
	echo Route('user',['userid'=>123,'useri'=>12]);
});

Route::get('example/details/{bla}/{bla2}/{bla3}',['as'=>'blog','uses'=>'WelcomeController@index']);

Route::get('blogroute',function(){
	echo Route('blog',['userid','a','b']);
});

//Use of name in routing
Route::get('user/profile','UserController@showProfile')->name('profile');
Route::get('def/abc',['as'=>'profile','uses'=>'Admin\AdminController@index']);	
	

Route::group(['prefix'=>'superadmin','namespace'=>'profile','as'=>'superadmin-'],function(){
	Route::get('name',function(){
		echo "admin name";
	})->name('name');
	Route::get('role',function(){
		echo "admin role";
	});
	Route::get('phnno',function(){
		echo "admin phnno";
	});
	Route::get('city',function(){
		echo "admin city";
	});
});

Route::get('testroute', ['as'=>'test','prefix'=>'prefix','namespace'=>'admin',function(){
	echo "working prefecly fine";
}]);

route::get('testroutegroup',function(){
	echo route('superadmin-name');
});

//Route::resource('Admin','AdminController');
Route::get('viewtest',function(){
	$data = ['a','b','c'];
	return view('view1',['alphabets'=>$data]);
});

Route::get('viewtestA',function(){
	$alphabets =['1','22'];
	return View::make('view1',compact('alphabets'));
});

Route::get('viewtestB',function(){
	$alphabets =['11','22'];
	$data = ['a','b'];
	return view('view1')->withalphabets($alphabets)
	->with('alphabets',$alphabets)->with('data',['data1','data2'])
	->with(['alphabets'=>$alphabets,'data'=>['data1','data2']]);
});

Route::get('dependency','Admin\AdminController@index');
Route::get('traits','Admin\TraitstestController@index');
//Middleware Testing @@
Route::get('middleware_testing',['middleware'=>'blabla','uses'=>'Admin\AdminController@index']);
//How pass data to view
/* how to pass data with view
return view('view',compact('data'));
return view('abc',['items'=>$data]);
return View::make('abc',compact('items'));
return view('abc')->with('items',$data)->with('users',$users);
return view('abc')->with()
*/

/*
Route::get('dependency2/{name}','DepController@dashboard');
Route::get('viewtest','DepController@viewTest');
Route::get('formtest','DepController@formTest');
*/
//auth testing
//Route::get('testing3','testController@test')->middleware('auth');
//Route::get('login','testController@login')->name('login');
//Route::get('/admin',['middleware' => 'auth:admin', 'uses' => 'AdminController@index']);

//Repository Testing
Route::group(['prefix'=>'R'],function(){
	Route::get('/','RController@index');
	Route::get('/view/{id}','RController@view');
	Route::get('/delete/{id}','RController@delete');
	Route::get('/store','RController@test');
});


//Repository Testing 2 
Route::group(['prefix'=>'repo'],function(){
	Route::get('dashboard/{catid?}', 'RepoTestController@index')->name('dashboard');
    Route::get('post/manage', 'RepoTestController@managePost');
    Route::get('post/create', 'RepoTestController@createPost')->name('post.create');
    Route::get('post/restore', 'RepoTestController@restorePost');
    Route::get('post/edit/{id}', 'RepoTestController@editPost');
    Route::get('post/delete-all', 'RepoTestController@deleteAllPost');
    Route::put('post/{id}', 'RepoTestController@updatePost')->name('repo_post.update');
    Route::post('post','RepoTestController@storePost')->name('post.store');
    Route::post('post/deleteselected', 'RepoTestController@deleteSelected');
    Route::post('post/{id}', 'RepoTestController@deletePost')->name('repo_post.delete');
    Route::get('post/view/{id}', 'RepoTestController@viewPost');
    
    Route::get('category/create', 'RepoTestController@createCategory')->name('category.create');
    Route::get('category/manage', 'RepoTestController@manageCategory');
    Route::get('category/delete-all', 'RepoTestController@deleteAllCategory');
    Route::get('category/restore', 'RepoTestController@restoreCategory');
    Route::get('category/edit/{id}', 'RepoTestController@editCategory');
    Route::post('category/delete', 'RepoTestController@deleteCategory');
    Route::post('category', 'RepoTestController@storeCategory')->name('category.store');
    Route::put('category/{id}', 'RepoTestController@updateCategory');
    
    Route::post('comment/store','RepoTestController@storeComment');
    Route::get('blog','RepoTestController@visitor');




});


Route::get('/home', 'HomeController@index')->name('home');

  
	Route::group(['prefix'=>'admin'], function(){
		Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin-login');
		Route::post('/login','Auth\AdminLoginController@login')->name('login-admin');	
		Route::get('/','AdminController@index')->name('admin');
		//Route::get('logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
	});
/// Auth::routes();

$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        $this->post('password/reset', 'Auth\ResetPasswordController@reset');
///Route::get('/home', 'HomeController@index')->name('home');
//blog project
   




//Blog Routes:
    Route::get('dashboard/{catid?}', 'DashboardController@index')->name('dashboard');
    Route::get('post/manage', 'DashboardController@managePost');
    Route::get('post/create', 'DashboardController@createPost')->name('post.create');
    Route::get('post/restore', 'DashboardController@restorePost');
    Route::get('post/edit/{id}', 'DashboardController@editPost');
    Route::get('post/delete-all', 'DashboardController@deleteAllPost');
    Route::put('post/{id}', 'DashboardController@updatePost')->name('post.update');
    Route::post('post','DashboardController@storePost')->name('post.store');
    Route::post('post/{id}', 'DashboardController@deletePost')->name('post.delete');
    Route::post('post/deleteselected', 'DashboardController@deleteSelected');
    Route::get('post/view/{id}', 'DashboardController@viewPost');
    
    Route::get('category/create', 'DashboardController@createCategory')->name('category.create');
    Route::get('category/manage', 'DashboardController@manageCategory');
    Route::get('category/delete-all', 'DashboardController@deleteAllCategory');
    Route::get('category/restore', 'DashboardController@restoreCategory');
    Route::get('category/edit/{id}', 'DashboardController@editCategory');
    Route::post('category/delete', 'DashboardController@deleteCategory');
    Route::post('category', 'DashboardController@storeCategory')->name('category.store');
    Route::put('category/{id}', 'DashboardController@updateCategory');
    
    Route::post('comment/store','DashboardController@storeComment');
    Route::get('blog','DashboardController@visitor');

   	Route::group(['prefix'=>'p'], function(){
	   	Route::get('test1', 'DashboardController@test1');
	    Route::get('test2', 'DashboardController@test2');
	    Route::get('fixed_deposit', 'DashboardController@fixed_deposit');
	    Route::get('gold', 'DashboardController@gold');
	    Route::get('old', 'DashboardController@old');
	    Route::get('other', 'DashboardController@other');
	    Route::get('security', 'DashboardController@security');
	    Route::get('vehicle', 'DashboardController@vehicle');
	    Route::get('form', 'DashboardController@showform');
	    Route::post('store', 'DashboardController@storeForm');
   });
    

