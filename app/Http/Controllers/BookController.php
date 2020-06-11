<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class BookController extends Controller
{
    public function index(){
       // $books = DB::select('SELECT * from `books`');

        $books = Book::all();
        return view('books/index',compact('books'));
    }

    public function show($book_id){
  // $books = DB::select('SELECT * from `books` WHERE `id` = ?', [$book_id]);
  /* 
  
  // This is longer expalaid version 
  
  $book = Book::find($book_id);
   if($book === null){
       abort(404);
       return 'Book not found';
   }
        return $book; */
// $books = DB::select('SELECT * from `books` WHERE `id` = ?', [$book_id]);
    
   /*  return Book::where('id',$book_id)->get(); */
   /*  return Book::where('id','>=' , $book_id)->get(); */

    $book = Book::findOrFail($book_id);
    return view('books.show', compact('book'));
}
   public function create(){

    return view('books.create');
   }
   public function store(Request $request)
   {
    
    //$title = $request->input('title');

    $book = new Book;
    $book->title = $request->input('title');
    $book->authors = $request->input('authors');
    $book->image = $request->input('image');
    
    $book->save();
    return redirect('books/'. $book->id);
   }
   public function edit($book_id)
   {
       $book = Book::findOrFail($book_id);
        return view('books.edit', compact('book'));
   }
   public function update($book_id, Request $request){
       // return $request->all();
        $book = Book::findOrFail($book_id);
        $book->title = $request->input('title');
        $book->authors = $request->input('authors');
        $book->image = $request->input('image');
        $book->save();

        return redirect('books/'. $book->id);

   }
    }

