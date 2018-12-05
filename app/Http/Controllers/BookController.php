<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('books.bookIndex', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.bookForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'titulo' => 'required|min:4',
          'seccion' => 'required|min:4',
          'ejemplar' => 'required|integer',
          'estado' => 'required|min:3',
          'codigo' => 'required|min:8',
          'edicion' => 'required',
        ]);

        $request->merge(['user_id' => \Auth::id()]);

        Book::create($request->all());
        return redirect()->route('book.index')
        ->with(['mensaje' => 'Libro creado con éxito', 'alert-class' => 'alert-success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.bookShow', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books.bookForm')->with(['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        Book::where('id', $book->id)->update($request->except('_token', '_method'));
      
        return redirect()->route('book.show', $book->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('book.index');
    }

    public function agregaAutor(Request $request)
    {
        $book = Book::find($request->book_id);

        $arrSincroniza = array();
        foreach ($request->book_id as $autorID) {
            $arrSincroniza += [$autorID];
        }
        $book->autores()->sync($arrSincroniza);

        return redirect()->route('book.show', $book->id);
    }
}
