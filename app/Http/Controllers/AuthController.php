<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Transformers\UserTransformer;
use Auth;

class AuthController extends Controller
{
    public function register(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $user = $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password'  => bcrypt($request->password),
        ]);

        $token = $user->createToken('nApp')->accessToken;

        $response =  fractal()
            ->item($user)
            ->transformWith(new UserTransformer)
            ->addMeta(['token' => $token])
            ->toArray();

        return response()->json($response, 201);
    }

    public function login(Request $request, User $user)
    {
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(['error' => 'Your Credential is Wrong'], 401);
        }

        $user = $user->find(Auth::user()->id);
        $token = $user->createToken('nApp')->accessToken;

        return fractal()
            ->item($user)
            ->transformWith(new UserTransformer)
            ->addMeta(['token' => $token])
            ->toArray();
    }
}
