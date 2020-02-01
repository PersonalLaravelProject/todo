@extends('layout')


@section('content')



   <div class="col-lg-6 col-lg-offset-3">

       <form action ="/create/todo" method="post">
       @csrf 

       <input type="text" class="form-control input-lg" name ="todo" placeholder="Create a new Todo" style="margin-left:19rem;">
       
       </form>
    


   </div>




@foreach($todos as $todo)
    {{$todo->todo}}<a href ="{{ route('todo.delete', ['$id' => $todo->todo]) }}" class="btn btn-danger">x</a>
    
    <a href ="{{ route('todo.update', ['$id' => $todo->id]) }}" class="btn btn-info btn-xs">Update</a> 

        <hr>

 @endforeach


 @stop
