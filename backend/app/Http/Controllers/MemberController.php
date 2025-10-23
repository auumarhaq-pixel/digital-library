<?php
// File: MemberController.php (Ganti total isinya)
namespace App\Http\Controllers;

use App\Models\Member; 
use Illuminate\Http\Request;

class MemberController extends Controller
{
    // GET /api/members
    public function index() {
        return response()->json(Member::all(), 200);
    }
    
    // POST /api/members
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:members',
            'phone' => 'required',
        ]);
        $member = Member::create($request->all());
        return response()->json($member, 201);
    }
    
    // GET /api/members/{id}
    public function show($id) {
        $member = Member::findOrFail($id);
        return response()->json($member, 200);
    }
    
    // PUT/PATCH /api/members/{id}
    public function update(Request $request, $id) {
        $member = Member::findOrFail($id);
        $member->update($request->all());
        return response()->json($member, 200);
    }
    
    // DELETE /api/members/{id}
    public function destroy($id) {
        Member::destroy($id);
        return response()->json(null, 204);
    }
}