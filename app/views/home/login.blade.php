@extends('home.main')
 @section('content') 
    <form action="/login"method="post"> 
        <input type="text"name="email"/> 
        <input type="password"name="password"/> 
        <input type="submit"value="登录"/> 
    </form>         
@endsection 
