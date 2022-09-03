<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function storeUserDetails(Request $request)
    {
        $user = new User();

        $user->username = ucfirst($request->input('username'));
        $user->id_num = $request->input('id_num');
        $user->position = ucfirst($request->input('position'));
        $user->password = Hash::make($request->input('password'));

        $user->save();
        
        return response()->json($request);

    }

    public function getLoginData(Request $request)
    {
        // $user = User::where('username', $request->username)->first();
        // if(!$user || !Hash::check($request->password, $user->password))
        // {
        //     return ["error" => "Email or password not matched!"];
        // }
        // return $user;

        if(!Auth::attempt($request->only('username','password','position'))){
            return response(
                ["error" => "Email or password not matched!"]
            , Response::HTTP_UNAUTHORIZED);
        }

        $user = Auth::user();
        $token = $user->createToken('token')->plainTextToken;

        $cookie = cookie(
            'jwt', 
            $token, 
            60 * 24
    ); // 1 day

        return response([
            'message' => $token,
        ])->withCookie($cookie);
    }

    public function getAuthenticate()
    {
        return Auth::user();
    }
}