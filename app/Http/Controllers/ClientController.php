<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use App\Http\Requests\UpdateClientRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::all();
        return view('manager.data-clients', [
            'title' => 'Data Client',
            'user' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('manager.form.member.formAdd-clients', [
            'title' => 'Tambah Data Client',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:tbl_users,email',
            'password' => 'required|min:6',
            'phone' => 'required',
            'role' => 'required|max:50',

        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->role = $request->role;

        if ($user->save()) {
            return redirect()->route('data.clients')->with('success', 'Data Berhasil di tambahkan');
        } else {
            return back()->withInput()->with('error', 'Gagal menambah data');
        }
    }

    /**
     * Display the specified resource.
     *
     *@param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id_users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     *  @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id_users)
    {
        //
        $user = User::find($id_users);
        return \view('manager.form.member.formedit-client', [
            'title' => 'Form tambah data clients',
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     *  @param  \App\Http\Requests\UpdateClientRequest  $request
     *@param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, User $user)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'name' => 'required',
            'password' => 'required|min:6',
            'phone' => 'required',
            'role' => 'required|max:50',
        ]);

        // cek keberadaan email di database
        if ($request->has('email')) {
            // Hapus email pengguna jika ada
            try {
                User::where('email', $request->email)->delete();
            } catch (QueryException $e) {
                return redirect()->back()->with('failed', 'Gagal menghapus email .');
            }
            // simpan email yg telah d perbaharui ke db
            $user->email = $request->email;
        }
        // simpan ke db
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->role = $request->role;

        // Simpan perubahan ke dalam database
        if ($user->save()) {
            return redirect()->route('data.clients')->with('success', 'Data User telah diperbarui');
        } else {
            return redirect()->back()->with('failed', 'Gagal memperbarui Data User');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     *@param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();

        return \redirect()->route('data.clients')->with('success', 'Data Berhasil di Hapus');
    }
}
