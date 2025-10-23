<?php
namespace App\Http\Controllers;

use App\Models\Book; 
use Illuminate\Http\Request;

class BookController extends Controller
{
    // GET /api/books
    public function index() {
        return response()->json(Book::all(), 200);
    }
    
    // POST /api/books
    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'author_id' => 'required|exists:authors,id',
            'publisher_id' => 'required|exists:publishers,id',
        ]);
        $book = Book::create($request->all());
        return response()->json($book, 201);
    }
    
    // GET /api/books/{id}
    public function show($id) {
        $book = Book::findOrFail($id);
        return response()->json($book, 200);
    }
    
    // PUT/PATCH /api/books/{id}
    public function update(Request $request, $id) {
        $book = Book::findOrFail($id);
        $book->update($request->all());
        return response()->json($book, 200);
    }
    
    // DELETE /api/books/{id}
    public function destroy($id) {
        Book::destroy($id);
        return response()->json(null, 204);
    }
}