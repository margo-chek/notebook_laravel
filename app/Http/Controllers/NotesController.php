<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index()
    {
        return view('note.main', [
            "notes" => Note::all()
        ]);
    }

    public function show(Note $note)
    {
        return view('note.show', compact('note'), [
            "notes" => Note::all()
        ]);
    }	

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'note_name' => 'required',
            'username' => 'required',
            'use_date' => 'required',
            'content' => 'required',
        ]);

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
        $request->validate([
            'note_name' => 'required',
            'username' => 'required',
            'use_date' => 'required',
            'content' => 'required',
        ]);
        
        $note->update($request->all());

        return redirect('/note');
    }

    public function destroy(Note $note)
    {
        $note->forceDelete(); // delete

        return redirect('/note');
    }
}
