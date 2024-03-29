<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'Data User',
            'data_user' => User::all()
    );

        return view('admin.master.user.list' , $data);
    }
    public function profile(){

        $user = Auth::user();
        $data = array(
            'title' => 'Setting Profile',
            'data_profile' => User::where('id', $user->id)->get(),
    );

        return view('profile' , $data);
    }

    public function profileKasir(){

        $user = Auth::user();
        $data = array(
            'title' => 'Setting Profile',
            'data_profile' => User::where('id', $user->id)->get(),
    );

        return view('profilekasir' , $data);
    }

        public function store(Request $request){
        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => $request->role,
        ]);

        return redirect('admin/user')->with('success', 'Data Berhasil Disimpan');
    }

    public function update(Request $request, $id){
        User::where('id', $id)
        ->where('id', $id)
        ->update([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => $request->role,
        ]);

        return redirect('admin/user')->with('success', 'Data Berhasil Di ubah');
    }

    public function updateprofile(Request $request, $id){
        User::where('id', $id)
        ->where('id', $id)
        ->update([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => $request->role,
        ]);

        return redirect('admin/profile')->with('success', 'Data Berhasil Di ubah');
    }

    public function destroy($id){
        $data_kota = User::where('id', $id)->delete();
        return redirect('admin/user')->with('success', 'Data Berhasil Dihapus');
    }
}
