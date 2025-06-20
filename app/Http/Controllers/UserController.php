<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $users = User::all(); // ambil semua user
    return view('pages.dashboard.users', compact('users'));
}

    /**
     * Show the form for creating a new resource.
     */
     public function create() //menampilkan form untuk membuat user baru
    {
         return view('dashboard.users.create'); // buat file blade-nya nanti
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //Simpan user baru ke DB     
    {
        $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'telepon' => 'required',
        'username' => 'required|unique:users',
        'password' => 'required|min:6',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'telepon' => $request->telepon,
        'username' => $request->username,
        'password' => bcrypt($request->password),
    ]);

    return redirect()->route('users.dashboard')->with('success', 'User berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */

    public function edit($id)
{
    $user = User::findOrFail($id);
    return view('pages.dashboard.edit_user', compact('user'));
}

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, $id)
{
    $request->validate([
        'username' => 'required|string|max:255',
        'email' => 'required|email',
        // 'telephone' => 'nullable|string|max:20',
    ]);

    $user = User::findOrFail($id);
    $user->update([
        'username' => $request->username,
        'email' => $request->email,
        // 'telephone' => $request->telephone,
    ]);

    return redirect()->route('users.index')->with('success', 'User updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
   public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->route('users.index')->with('success', 'User berhasil dihapus.');
}
}
