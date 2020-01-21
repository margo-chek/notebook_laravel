<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

// $username = getFromSession('username');

class NotesController extends Controller
{
    public function index()
    {
        // $notes = \App\Note::all();
        // return view('notes.index', compact('notes'));
        return view('note.main', [
            "notes" => Note::all()
        ]); // /resources/views/note/main.blade.php
    }

    public function show(Note $note)
    {
        // $note = Note::find($id);
        return view('note.show', compact('note'), [
            "notes" => Note::all()
        ]);
        // return view('note.show', [
        //     // "note" => $note
        // ]);
    }	

    public function store(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     'note_name' => 'required',
        //     'username' => 'required',
        //     'use_date' => 'required',
        //     'content' => 'required',
        // ]);
  
        Note::create($request->all());
   
        return redirect('/note');
    }

    public function create()
    {
        return view('note.create', [
            "notes" => Note::all()
        ]);
    }

    public function edit(Note $note)
    {
        return view('note.edit', compact('note'), [
            "notes" => Note::all()
        ]);
    }

    public function update(Request $request, Note $note)
    {
        // dd($request->all()); // убедиться, что данные приходят
        // dd($note->toArray()); // убедиться, что данные из базы загружаются
        // die("TEST"); // проверяем, что в функцию заходит
        // $request->validate([
        //     'note_name' => 'required',
        //     'username' => 'required',
        //     'use_date' => 'required',
        //     'content' => 'required',
        // ]);
        $note->update($request->all());
  
        return redirect('/note');
    }
  
    public function destroy(Note $note)
    {
        $note->forceDelete(); //delete

        return redirect('/note');
        // return redirect()->route('note.main',[
        //     "notes" => Note::all()
        // ])
        //                 ->with('success','Note deleted successfully');
    }

	// public function index()
    // {
    //     // // $notes = App\Note::incomplete();
    //     // $notes = App\Note::all();
    //     return view('notes.index', compact('notes'));
    // }
    // public function show($id)
    // {
    //     $note = App\Note::find($id);
    //     return view('notes.show', compact('note'));
    // }	

    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Note  $note
    //  * @return \Illuminate\Http\Response
    //  */

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Note  $note
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Note $note)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Note  $note
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Note $note)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Note  $note
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Note $note)
    // {
    //     //
    // }
}
 