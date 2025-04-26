<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    public function showAssignRoleForm()
{
    // $users = User::all();
    // return view('assign-role', compact('users'));
    return view();
}


public function assignRole(Request $request)
{
    // $request->validate([
    //     'user_id' => 'required|exists:users,id',
    //     'role' => 'required|string'
    // ]);

    // $user = User::find($request->user_id);
    // $user->assignRole($request->role); 
    // You need Spatie roles package for this

    // return back()->with('success', 'Role assigned successfully!');
}
}
