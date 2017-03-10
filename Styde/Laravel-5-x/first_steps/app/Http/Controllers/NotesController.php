<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NotesController extends Controller
{
    public function index()
    {
        $notes = Note::paginate(20);
        return view('notes/list', compact('notes'));
    }

    public function create()
    {
        return view('notes/create');
    }

    public function store()
    {
        $this->validate(request(), [
            'note' => ['required', 'max:200']
        ]);

        $data = request()->all();

        Note::create($data);

        return redirect()->to('notes');
    }

    public function show($note)
    {
        $note = Note::query()->findOrFail($note);

        return view ('notes/details')->with('note', $note);
    }
}
