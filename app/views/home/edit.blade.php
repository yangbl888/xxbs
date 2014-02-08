@extends('home.main')
 @section('content') 
    <form action="add"method="post"> 
        <input type="text"name="title"/> 
        <textarea name="content"></textarea> 
        <button>提交</button> 
    </form>        
 @endsection 
