<?php

namespace App\Http\Controllers;

use App\Entry;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        
    }

    public function create()
    {
        return view('entries.create');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|min:7|max:255|unique:entries',
            'content' => 'required|min:25|max:3000'
        ]);

        //creando una nueva entrada
        $entry =new Entry();
        $entry->title =$validateData['title'];
        $entry->content =$validateData['content'];
        $entry->user_id = auth()->id();
        $entry->save();//insert
        
        $status ='tu entrada ha sido publicada exitosamente';
        return back()->with(compact('status'));
    }
    public function edit(Entry $entry){
        return view('entries.edit',compact('entry'));
    }

    public function update(Request $request,Entry $entry )
    {
        $validateData = $request->validate([
            'title' => 'required|min:7|max:255|unique:entries,id,'.$entry->id,
            'content' => 'required|min:25|max:3000'
        ]);

        //creando una nueva entrada
        // TODO: allow edit action only for the author
        $entry->title =$validateData['title'];
        $entry->content =$validateData['content'];
        $entry->user_id = auth()->id();
        $entry->save();//insert
        
        $status ='tu entrada ha sido actualizada exitosamente';
        return back()->with(compact('status'));
    }
}
