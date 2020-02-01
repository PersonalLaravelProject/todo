@extends('layout')


@section('content')



   <div class="col-lg-12 col-lg-offset-3">

       <form action ="{{ route('todos.save', ['$id' => $todo->id])}}" method="post">
       @csrf 

       <input type="text" class="form-control input-lg" name ="todo" value ="{{ $todo->todo}}" placeholder ="Create a new Todo" style="margin-left:29rem;">
       
       </form>
    


   </div>




 @stop
