<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/')->withErrors(['error' => 'You must be logged in!']);;
        }
        $category_id = $request->query('category_id'); // استلام category_id من الرابط

        return view('todolist.addtask', compact('category_id'));
    }    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $validation = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);

        task::create($validation);

        return redirect('/')->with('success', 'Task created successfully.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(task $task)
    {
        //
        $task->delete();
        return redirect('/')->with('success', 'Task deleted successfully.');
    }
}
