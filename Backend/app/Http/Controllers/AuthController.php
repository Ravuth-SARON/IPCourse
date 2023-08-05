<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request) {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function login(Request $request)
    {
        try {
            $fields = $request->validate([
                'email' => 'required|string',
                'password' => 'required|string'
            ]);

            // Check email
            $user = User::where('email', $fields['email'])->first();

            // Check password
            if (!$user || !Hash::check($fields['password'], $user->password)) {
                return response([
                    'message' => 'Bad creds'
                ], 401);
            }

            $user->last_login_at = now();
            $user->save();

            $token = $user->createToken('myapptoken')->plainTextToken;

            $response = [
                'user' => $user,
                'token' => $token
            ];

            return response($response, 201);
        } catch (\Exception $e) {
            // Log the exception for debugging purposes
            Log::error('Login error: ' . $e->getMessage());

            // Return an error response
            return response([
                'message' => 'An error occurred during login'
            ], 500);
        }
    }

    public function logout(Request $request)
{
    $user = $request->user();
    if (!$user) {
        // Log or debug the issue
        // return response()->json(['message' => 'User not authenticated'], 401);
    }

    $user->tokens()->delete();

    return response()->json(['message' => 'Logged out successfully']);
}












public function getCurrentUserInfo()
{
    $user = Auth::user();
    // $user is an instance of the User model
    return response()->json($user);
}


}