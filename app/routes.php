<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|


Route::get('/', function()
{
	return View::make('hello');
});

*/

Route::controller('user', 'UserController');


Route::get('rbac/{id}', function($id)
{
    return 'Hello World--'.$id;
});




Route::get('doc',function() 
        { 
            $docs = DB::table('docs')->get();
            return View::make('home.doc'); 
        });
       
        
Route::get('add',function() 
        { 
            return View::make('home.add'); 
        }); 
        
Route::get('edit',function() 
        { 
            return View::make('home.edit'); 
        });   
        
Route::get('login',function() 
        { 
            return View::make('home.login'); 
        });   
        
Route::post('login', function() 
     {
       $userdata = array(
         'username' => Input::get('username'),
         'password' => Input::get('password')
        );
      if ( Auth::attempt($userdata) )
{
return Redirect::to('admin');
}
else
{
return Redirect::to('login')
->with('login_errors', true);
}
});                             
