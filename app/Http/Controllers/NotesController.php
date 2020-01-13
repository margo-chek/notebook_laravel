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
        // return view('notes.show', compact('note'));
        return view('note.show', [
            "note" => $note
        ]);
    }	

    public function store(Request $request)
    {
        $request->validate([
            'note_name' => 'required',
            'use_date' => 'required',
            'conten' => 'required',
        ]);
  
        Note::create($request->all());
   
        return redirect()->route('note.index')
                        ->with('success','Note created successfully.');
    }

    public function create()
    {
        return view('note.create');
    }

    public function edit(Note $note)
    {
        return view('note.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $request->validate([
            'note_name' => 'required',
            'use_date' => 'required',
            'conten' => 'required',
        ]);
  
        $note->update($request->all());
  
        return redirect()->route('note.index')
                        ->with('success','Note updated successfully');
    }
  
    public function destroy(Note $note)
    {
        $note->delete(); //forceDelete
  
        return redirect()->route('note.index')
                        ->with('success','Note deleted successfully');
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
 