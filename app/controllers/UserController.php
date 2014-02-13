<?php

class UserController extends BaseController {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */

 protected $layout = 'layout.user';
  
 public function __construct() {
  $this->beforeFilter('csrf', array('on'=>'post'));
  $this->beforeFilter('auth', array('only'=>array('getIndex')));

}

   //显示登录页面
 public function getLogin()
    {
        return View::make('login');
    }

 //处理登录
 public function postLogin()
    {
   if (Auth::attempt(array('UserId'=>Input::get('UserId'), 'password'=>Input::get('password')))) {
  return Redirect::to('user/index')->with('message', '登录成功!');
} else {
  return Redirect::to('user/login')
    ->with('message', '用户名或密码不正确')->withInput();
}
    }
    
 //处理登出
 public function getLogout() {
  Auth::logout();
  return Redirect::to('user/login')->with('message', '你已经注销登录!');
}

   //提交注册用户
  public function postCreate() {  

  $validator = Validator::make(Input::all(), User::$rules);  //校验，在model/user.php中

  if ($validator->passes()) {
  $user = new User;
  $user->UserId = Input::get('UserId');
  $user->Email = Input::get('Email');
  $user->Password = Hash::make(Input::get('password'));
  $user->save();
  return Redirect::to('user/login')->with('message', '感谢您的注册!');
} else {
   return Redirect::to('user/login')->with('message', '发生以下错误：')->withErrors($validator)->withInput();
}

}

   //显示首页
 public function getIndex()
    {
          $this->layout->content = View::make('user.index');
    }
 


}