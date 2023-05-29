<?php

namespace App\Http\Controllers;

use App\Enums\RoleList;
use App\Models\Pengajuan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;

class MobileAuthController extends Controller
{

    public function getUser()
    {
        $user = User::all();
        return Response::json(['data'=>$user,'code'=>200]);
    }

    public function login(Request $request)
    {
//            $user = User::where('email', $request->email)->first();
        $user =User::query()->where('email','=',$request->email)->where('tipe_user','=',RoleList::STAKEHOLDER)->first();
            if (!$user) {
                return response()->json(['pesan' => 'User tidak ditemukan', 'code' => 400]);
            }
            if (!Hash::check($request->password, $user->password)) {
                return response()->json(['pesan' => 'Email & Password salah', 'code' => 404]);
            }

        return Response::json(['pesan'=>'Berhasil', 'code' => 200]);
    }



    public function Register(Request $request)
    {
        User::create([
            'nama'=>$request['nama'],
            'email'=>$request['email'],
            'password'=>Hash::make($request['password']),
            'tipe_user'=>RoleList::STAKEHOLDER,
        ]);
        return Response::json(['Pesan'=>'Registrasi Berhasil','code'=>200]);
    }

    public function GetProyekData($id){
        $dataProyek =Pengajuan::all()->where('users_id','=',$id);
        return Response::json(['data'=>$dataProyek,'code'=>200]);
    }
}
