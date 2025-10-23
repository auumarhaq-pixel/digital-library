<?php
namespace App\Http\Controllers;

use App\Models\Author; 
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // GET /api/authors
    public function index() {
        return response()->json(Author::all(), 200);
    }
    
    // POST /api/authors
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|unique:authors',
        ]);
        $author = Author::create($request->all());
        return response()->json($author, 201);
    }
    
    // GET /api/authors/{id}
    public function show($id) {
        $author = Author::findOrFail($id);
        return response()->json($author, 200);
    }
    
    // PUT/PATCH /api/authors/{id}
    public function update(Request $request, $id) {
        $author = Author::findOrFail($id);
        $author->update($request->all());
        return response()->json($author, 200);
    }
    
    // DELETE /api/authors/{id}
    public function destroy($id) {
        Author::destroy($id);
        return response()->json(null, 204);
    }
}