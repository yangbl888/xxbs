
     这是用户后台首页     
     <br />
         @if(Session::has('message'))
     {{ Session::get('message') }}
    @endif
    
     <br />
     @if(!Auth::check())
          <li>{{ HTML::link('user/register', 'Register') }}</li>   
          <li>{{ HTML::link('user/login', 'Login') }}</li>   
        @else
          <li>{{ HTML::link('user/logout', 'logout') }}</li>
        @endif


