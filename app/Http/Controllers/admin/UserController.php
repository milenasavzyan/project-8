<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Image;
class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.users.index', compact('users'));
    }

    public function show (Request $request, string $id)
    {
        $users = User::all();
        $user = User::findOrFail($id);
        return view('admin.users.view', compact('user', 'users'));
    }
    public function edit(Request $request, string $id)
    {
        $users =User::all();
        $user = User::findOrFail($id);
        $user->fill($request->only(['name', 'email', 'password']));
        $user->save();

        return view('admin.users.edit', compact('user','users'));
    }
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        if (!$user) {
            return "User not found";
        }

        $user->fill($request->only(['name', 'email']));
        $user->save();

        return redirect()->route('admin.users.index');
    }
    public  function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.users.index');
    }

}
