<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index()
    {
    	$users = User::all();

    	return view('admin.users.index', compact('users'));
    }

    public function create()
    {
    	return view('admin.users.create');
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role_id' => ['required', 'string', 'max:10'],
        ]);

    	$user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
        ]);
        event(new Registered($user));
        return redirect(route('admin.users'));
    }

    public function edit($id)
    {   
        $user = User::find($id);

        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;

        $user->save();

        return redirect('admin/users')->with('success', 'Data berhasil diperbaharui!');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect('admin/users')->with('success', 'Data berhasil Dihapus!');
    }
}
