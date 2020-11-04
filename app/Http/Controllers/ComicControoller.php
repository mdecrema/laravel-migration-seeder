<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
use Illuminate\Validation\Rule;

class ComicControoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'title'=>'required|max:30',
            'original_title'=>'required|max:50',
            'author'=>'required|max:50',
            'release'=>'required|date',
            'amount'=>'required|numeric'
        ]);

        $newComic = new Book;

        $newComic->title=$data['title'];
        $newComic->original_title=$data['original_title'];
        $newComic->author=$data['author'];
        $newComic->release=$data['release'];
        $newComic->amount=$data['amount'];

        $newComic->save();

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id); 
        
        return view("comics.show", ["comic" => $comic]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $request->validate([
            'title'=>'required|max:30',
            'original_title'=>'required|max:50',
            'author'=>'required|max:50',
            'release'=>'required|date',
            'amount'=>'required|numeric'
        ]);

        $comic = Comic::find($id);

        $comic->title=$data['title'];
        $comic->original_title=$data['original_title'];
        $comic->author=$data['author'];
        $comic->release=$data['release'];
        $comic->amount=$data['amount'];

        $comic->update();

        return redirect()->route("comics.show", $comic);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comics = Comic::find($id);
        $comics->delete();

        return redirect()->route('comics.index');
    }
}
