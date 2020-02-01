<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{ 
    public function index() {
        $todos = Todo::all();
       // $todos= json_encode($todos);
        //dd($todos);
        return view('todos')->with('todos', $todos);

    }

    public function store(Request $request) {
     
      //dd($request->all());

      $todo = new Todo;

      $todo->todo = $request ->todo;
      $todo->save();


      return redirect()->back();
    }


    public function delete($todos){
      
        $todo = Todo::where('todo', $todos)->firstOrFail();
        $todo->delete();

        return redirect()->back();


    }


    public function update ($id){

        $todo = Todo::find($id);
        $good = "update is good";
        $bad = "no update";
          

        //if $todos is true return response " update is good " else return no update.

       // return view('update')->with('todo', $todo);
      
    }


    public function save (Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->todo  = $request->todo;
        $todo->save();
        
        return redirect()->back();
    }
}
