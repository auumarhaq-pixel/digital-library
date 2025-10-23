<?php
namespace App\Http\Controllers;

use App\Models\Publisher; 
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    // GET /api/publishers
    public function index() {
        return response()->json(Publisher::all(), 200);
    }
    
    // POST /api/publishers
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|unique:publishers',
        ]);
        $publisher = Publisher::create($request->all());
        return response()->json($publisher, 201);
    }
    
    // GET /api/publishers/{id}
    public function show($id) {
        $publisher = Publisher::findOrFail($id);
        return response()->json($publisher, 200);
    }
    
    // PUT/PATCH /api/publishers/{id}
    public function update(Request $request, $id) {
        $publisher = Publisher::findOrFail($id);
        $publisher->update($request->all());
        return response()->json($publisher, 200);
    }
    
    // DELETE /api/publishers/{id}
    public function destroy($id) {
        Publisher::destroy($id);
        return response()->json(null, 204);
    }
}